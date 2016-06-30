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
		$notes = $this->note->findAll();
		return view('notes.index', compact('notes'));
	}

	public function store(Request $request)
	{
		echo $request->title;
	}
}
