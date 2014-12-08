@extends('layouts.master')
@section('content')
@include('partials.navbar-blog')
<div class="container firstcontainer lastcontainer">
	<div class="row centered mt mb">
		<p><a href="posts/create">Make New Post</a></p>
		<h1>All Posts</h1>
		@foreach($posts as $post)
		<p>
			{{ $post->id }}
		<a href="posts/{{ $post->id }}"><b>{{ $post->title }}</b></a>
			{{ $post->body }}
		</p>
		@endforeach

		{{ $posts->links() }}
	</div>
</div>
@stop