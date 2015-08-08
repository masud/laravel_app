<!DOCTYPE html>
<html lang="en">
<head>
	@section('head')
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/style.css') }}
	@show
</head>
<body>
	<div class="navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>	
				<a href="{{ URL::route('home' )}}" class="navbar-brand">Laravel Forum Software</a>			
			</div>	
			<div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{ URL::route('home') }}">Home</a></li>
					<li><a href="{{ URL::route('forum-home') }}">Forum</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if(!Auth::check())
						<li><a href="{{ URL::route('getCreate') }}">Register</a></li>
						<li><a href="{{ URL::route('getLogin') }}">Login</a></li>
					@else
						<li><a href="{{ URL::route('getLogout') }}">Logout</a></li>					
					@endif
				</ul>
			</div>		
		</div>		
	</div>

	<div class="container">@yield('content')</div>
	{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>