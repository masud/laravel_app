<!DOCTYPE html>
<html lang="en">
<head>
	@section('head')
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	@show
</head>
<body>

	@yield('content')
	{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>