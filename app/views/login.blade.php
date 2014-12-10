{{ Form::open(array('action' => 'HomeController@authenticate')) }}
{{ Form::label('email', 'Email') }}
{{ Form::text('email', Input::old('email')) }}
{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}
{{ Form::submit('Login') }}
{{ Form::close() }}