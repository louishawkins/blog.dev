@extends('layouts.master')

@section('content')
<div class="container firstcontainer lastcontainer">
	<div class="row centered mt mb">
		<p><a href="{{ action('PostsController@show', $post->id) }}"><|-- Cancel</a></p>
		<h1>Edit Post</h1>
		{{ Form::model($post, (array('action' => ['PostsController@update', $post->id], 'method' => 'PUT'))) }}
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title') }}
			<br>
			{{ Form::label('body', 'Body') }}
			<br>
			{{ Form::textarea('body') }}	
			<br>
			{{ Form::submit('Post') }}		
		{{ Form::close() }}

		{{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE')) }}
			{{ Form::submit('Delete') }}
		{{ Form::close() }}
	</div>
</div>
@stop