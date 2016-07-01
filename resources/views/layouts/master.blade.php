<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ToDoodle!</title>

	<!-- Styles -->
	<link rel="stylesheet" href="{!! URL::asset('css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! URL::asset('css/notes.css') !!}">
	<link rel="stylesheet" href="{!! URL::asset('fonts/font-awesome.min.css') !!}">

</head>
<body style="background-color: #F05D5E">
	<div class="container" style="margin-top: 40px; margin-bottom: 40px">

		@if (Session::has('flash_notification.message'))
		<div class="col-md-8 col-md-offset-2 alert alert-{{ Session::get('flash_notification.level') }}" id="alert-div">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{ Session::get('flash_notification.message') }}
		</div>
		@endif

		@yield('content')
	</div>
	<script type="text/javascript" src="{!! URL::asset('js/jquery-2.2.4.min.js') !!}"></script>
	<script type="text/javascript" src="{!! URL::asset('js/bootstrap.min.js') !!}"></script>

	@yield('script')
</body>
</html>