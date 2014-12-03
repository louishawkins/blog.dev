@extends('layouts.master')

@section('content')
<div class="container firstcontainer lastcontainer">
	<div class="row centered mt mb">
		<p><a href="{{ action('PostsController@index') }}"><|-- Back to View All Posts</a></p>
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->body }}</p>
	</div>
</div>
@stop