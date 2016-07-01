<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use ToDoodle\Note\Contracts\NoteRepositoryInterface as Note;

class NotesController extends Controller
{
	public function __construct(Note $note)
	{
		$this->note = $note;
	}

	public function index()
	{
		$notes = $this->note->findNotes();
		$checkedNotes = $this->note->findCheckedNotes();

		return view('notes.index', compact('notes', 'checkedNotes'));
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|min:5'
		]);

		$this->note->storeNote($request->title);

		return back();
	}

	public function check($id)
	{
		$this->note->checkNote($id);

		return back();
	}

	public function destroy($id)
	{
		$this->note->destroyNote($id);

		return back();
	}

	public function edit($id)
	{
		$note = $this->note->getNote($id);
		return view('notes.edit', compact('note'));
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required|min:5'
		]);

		$this->note->updateNote($id, $request->title);

		return redirect('/');
	}
}
