@extends('layouts.master')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="row text-center" style="background-color: #60695C; color: white; border-radius: 5px">
			<h1>ToDo List:</h1>
		</div>
		<div class="row" style="margin: 0px 10px; background-color: #C5D6D8; border-radius: 0px 0px 5px 5px">
			<div style="margin: 10px">
				<ul class="list-unstyled">
					<li>
						<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#createNewNote" style="width: 100%">
							<i class="fa fa-plus"></i> 
							Add new Note
						</button>
					</li>
					@foreach ($notes as $note)
					<li style="margin: 0px 10px;">
						<a href="" class="text-center">
							<h1>
								{!! $note->title !!}
							</h1>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>

	<div class="modal fade" id="createNewNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add New Note</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="store">
					<input type="text" class="form-control" placeholder="New Note" name="title">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Add Note</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection