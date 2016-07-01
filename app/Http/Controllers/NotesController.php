<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use ToDoodle\Note\Contracts\NoteRepositoryInterface;

class NotesController extends Controller
{
	protected $note;

	public function __construct(NoteRepositoryInterface $note)
	{
		$this->note = $note;
	}

	public function index()
	{
		$notes = $this->note->all();

		return view('notes.index', compact('notes'));
	}

	public function check($id)
	{
		$this->note->check($id);
		return back();
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|min:5|max:30'
		]);

		$this->note->store(array('title' => $request->title));

		return back();
	}

	public function destroy($id)
	{
		$this->note->delete($id);

		return back();
	}

	public function edit($id)
	{
		$note = $this->note->get($id);
		return view('notes.edit', compact('note'));
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required|min:5|max:30'
		]);

		$this->note->update(array('title' => $request->title), $id);

		return redirect('/');
	}
}
