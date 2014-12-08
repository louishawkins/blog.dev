@extends('layouts.master')
@section('content')
@include('partials.navbar-blog')
<link rel="stylesheet" src="css/blog.css">
<div class="container firstcontainer lastcontainer">
	<div class="row centered mt mb">
		<p><a href="posts/create">Make New Post</a></p>
		<h1>All Posts</h1>
		@foreach($posts as $post)
		<h3 id="post-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h3>
		<p id="created-at">
			<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
			{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}
		</p>
		<p>{{ $post->body }}</p>
		</p>
		@endforeach
		{{ $posts->appends('search', 'some value')->links() }}
	</div>
</div>
@stop