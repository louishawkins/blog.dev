@extends('layouts.master')
@section('content')
@include('partials.navbar-blog')
<link rel="stylesheet" src="css/blog.css">
<div class="container firstcontainer lastcontainer">
	<div class="row centered mt mb">
		<div id="show-posts-column" class="col-md-8">
			@if(Auth::check())
				@if(Auth::user()->role_id == '1')
					<p><a href="posts/create">Make New Post</a></p>
				@endif
			@endif
			<h1>All Posts</h1>
			@foreach($posts as $post)
				<h3 class="post-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h3>
				<div class="created-at">{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}</div>
				<p>{{ $post->body }}</p>
				</p>
			@endforeach
			{{ $posts->links() }}
		</div><!--posts column-->
		<div id="sidebar-column" class="col-md-4">
			<h4>Side Bar</h4>
			<p>With all sorts of sidey stuff</p>
			<ul>
				<li>Mass Displacement</li>
				<li>Corneal Braces</li>
				<li>Compulsary Recycling</li>
				<li>Blog Stuff</li>
			</ul>
		</div>
	</div> <!--row -->
</div>
@stop