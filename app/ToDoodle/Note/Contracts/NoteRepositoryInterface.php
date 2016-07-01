<?php

namespace ToDoodle\Note\Contracts;

interface NoteRepositoryInterface
{
	public function findNotes();

	public function findCheckedNotes();

	public function storeNote($content);

	public function checkNote($id);

	public function destroyNote($id);

	public function getNote($id);

	public function updateNote($id, $title);
}