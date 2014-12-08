@extends('layouts.master')

@section('content')
<div class="container firstcontainer lastcontainer">
	<div class="row centered mt mb">
		<p><a href="{{ action('PostsController@index') }}"><|-- Back to View All Posts</a></p>
		<p><a href="{{ action('PostsController@edit', $post->id) }}">~- Edit Post</a></p>
		<h1>{{ $post->title }}</h1>
		{{ $post->body }}
	</div>
</div>
@stop