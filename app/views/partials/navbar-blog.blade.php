	<nav class="navbar-black navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<ul id="blog-search-bar" class="nav navbar-nav navbar-left">
			@if(Auth::check())
				<li><a href="{{ action('HomeController@logout') }}">Logout</a></li>
			@else
				<li><a href="{{ action('HomeController@showLogin') }}">Login</a></li>
			@endif
			<li>
			<div id="search-bar">
				{{ Form::open(array('action' => 'PostsController@index', 'method' => 'get')) }}
				{{ Form::text('search', Input::old('search')) }}
				{{ Form::submit('Search') }}
				{{ Form::close() }}
			</div>
			</li>
			</ul>
			<ul id="blog-links" class="nav navbar-nav navbar-right">
				<li><a href="{{ action('PostsController@index') }}">Blog</a></li>
				<li><a href="{{ action('HomeController@showPortfolio') }}">Home</a></li>
			</ul>
		</div>
	</nav>