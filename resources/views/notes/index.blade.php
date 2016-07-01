@extends('layouts.master')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div id="notes-header" class="row text-center notes-header">
			<h1 class="notes-header-title">To Do List</h1>
		</div>
		<div class="row notes-row-div">
			<div style="margin: 10px">
				<ul class="list-unstyled">
					<li>
						<button class="btn btn-primary btn-lg note-new-button" data-toggle="modal" data-target="#createNewNote">
							<i class="fa fa-plus"></i> 
							Add new Note
						</button>
					</li>
					@foreach ($notes as $note)
					<li class="text-center li-note">
							@if ($note->status == 0)
							<a href="{!! action('NotesController@check', ['id' => $note->id]) !!}">
								<h1>
									<i class="fa fa-square-o note-check-box" style="float: left"></i>
									{!! $note->title !!}
								</h1>
							</a>
							@else
							<h1 class="note-checked">
								<i class="fa fa-check-square-o" style="float: left"></i>
								<s>{!! $note->title !!}</s>
							</h1>
							@endif

						<div class="li-note-option">
							@if ($note->status == 0)
							<a href="{!! action('NotesController@edit', ['id' => $note->id]) !!}" class="greenish"><i class="fa fa-pencil-square-o" class="note-edit-option"></i> Edit</a>
							@endif
							<a href="{!! action('NotesController@destroy', ['id' => $note->id]) !!}" class="reddish"><i class="fa fa-trash-o"></i> Delete</a>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>

	<div class="modal fade" id="createNewNote" tabindex="-1" role="dialog" aria-labelledby="newNoteModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="newNoteModalLabel">Add New Note</h4>
				</div>
				<div class="modal-body">
					{!! Form::open(array('action' => 'NotesController@store')) !!}
						{!! Form::textarea('title', null, array('class' => 'form-control', 'placeholder' => 'New Note', 'rows' => '3')) !!}
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add Note</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$('.li-note-option').hide();
			$('.note-check-box').css("opacity", "0.0");

			$('#alert-div').delay(2000).slideUp('fast');

			$('.li-note').hover(function(){
				$(this).find('.li-note-option').slideDown('fast');
				$(this).find('.note-check-box').css("opacity", "1.0");
			}, function(){
				$(this).find('.li-note-option').slideUp('slow');
				$(this).find('.note-check-box').css("opacity", "0.0");
			});

			$('.note-edit-option').hover(function(){
				console.log($(this).attrib('data-target'));
			});
		});
	</script>
@endsection