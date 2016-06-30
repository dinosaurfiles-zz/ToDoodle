<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ToDoodle!</title>

	<!-- Styles -->
	<link rel="stylesheet" href="{!! URL::asset('css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! URL::asset('fonts/font-awesome.min.css') !!}">
</head>
<body style="background-color: #D6F9DD">
	<div class="container" style="margin-top: 40px">
		@yield('content')
	</div>
	<script type="text/javascript" src="{!! URL::asset('js/jquery-2.2.4.min.js') !!}"></script>
	<script type="text/javascript" src="{!! URL::asset('js/bootstrap.min.js') !!}"></script>
</body>
</html>