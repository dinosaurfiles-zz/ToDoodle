<?php

namespace ToDoodle\Note\Repositories;

use App\Note;

use ToDoodle\Note\Contracts\NoteRepositoryInterface;

use ToDoodle\MainRepository;
use ToDoodle\MainRepositoryInterface;

class NoteRepository extends MainRepository implements NoteRepositoryInterface
{
	protected $note;

	public function __construct(Note $note)
	{
		parent::__construct($note);
		$this->note = $note;
	}

	public function check($id)
	{
		$note = $this->note->find($id);
		$note->status = '1';
		$note->save();
	}
}