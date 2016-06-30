<?php

namespace ToDoodle\Note\Repositories;

use App\Note;

use ToDoodle\Note\Contracts\NoteRepositoryInterface;

class NoteRepository implements NoteRepositoryInterface
{
	public function findAll()
	{
		return Note::all();
	}
}