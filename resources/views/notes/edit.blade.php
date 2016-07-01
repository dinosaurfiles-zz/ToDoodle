@extends('layouts.master')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="row text-center notes-header notes-header-edit">
		<h1>Edit Note#{!! $note->id !!}</h1>
		{!! Form::open(array('action' => array('NotesController@update', $note->id), 'method' => 'PATCH')) !!}
			{!! Form::textarea('title', $note->title, array('class' => 'form-control')) !!}
			{!! Form::submit('Submit!', array('class' => 'btn btn-primary')) !!}
		{!! Form::close() !!}
		</div>
	</div>
@endsection