<?php

namespace ToDoodle\Note\Repositories;

use App\Note;

use Flash;

use ToDoodle\Note\Contracts\NoteRepositoryInterface;

class NoteRepository implements NoteRepositoryInterface
{
	public function findNotes()
	{
		return Note::where('status', '=', '0')->get();
	}

	public function findCheckedNotes()
	{
		return Note::where('status', '=', '1')->get();
	}

	public function storeNote($content)
	{
		$note = new Note([
			'title' => strip_tags($content)
		]);
		$note->save();

		Flash::success('Note Added!');
	}

	public function checkNote($id)
	{
		$note = Note::find($id);
		$note->status = 1;
		$note->update();
	}

	public function destroyNote($id)
	{
		$note = Note::find($id);
		$note->delete();
	}

	public function getNote($id)
	{
		return Note::find($id);
	}

	public function updateNote($id, $title)
	{
		$note = Note::find($id);
		$note->title = $title;
		$note->update();
	}
}