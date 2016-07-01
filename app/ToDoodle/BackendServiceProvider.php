<?php

namespace ToDoodle;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind(
			'ToDoodle\Note\Contracts\NoteRepositoryInterface',
			'ToDoodle\Note\Repositories\NoteRepository'
		);

		$this->app->bind(
			'ToDoodle\MainRepositoryInterface',
			'ToDoodle\Note\Repositories\NoteRepository'
		);

		$this->app->bind(
			'ToDoodle\MainRepositoryInterface',
			'ToDoodle\MainRepository'
		);
	}
}