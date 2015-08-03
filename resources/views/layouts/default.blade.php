<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/alertify.core.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/alertify.default.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/alertify.bootstrap.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap-select.min.css') !!}">

	<title>{{ $title }}</title>
</head>
<body>
	@include('nav.nav')
	<div class="container">
		@include('layouts.flash')
		@yield('content')
	</div>
	
	<script src="https://code.jquery.com/jquery-git2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{!! asset('js/alertify.js') !!}"></script>
	<script src="{!! asset('js/bootstrap-select.min.js') !!}"></script>
	@yield('script')
	<script type="text/javascript">
	$('div.alert').not('.alert-important').delay(3000).slideUp(300);
	</script>
</body>
</html>