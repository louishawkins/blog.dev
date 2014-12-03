@extends('layouts.master')

@section('content')
<div class="container firstcontainer lastcontainer">
	<div class="row centered mt mb">
		<p><a href="{{ action('PostsController@index') }}"><|-- Cancelq</a></p>
		<h1>Create New Post</h1>
		{{ Form::open(array('action' => 'PostsController@store')) }}
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', Input::old('title')) }}
			<br>
			{{ Form::label('body', 'Body') }}
			<br>
			{{ Form::textarea('body', Input::old('body')) }}	
			<br>
			{{ Form::submit('Post') }}		
		{{ Form::close() }}
	</div>
</div>
@stop