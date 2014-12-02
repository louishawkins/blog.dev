@extends('layouts.master')
@section('content')
    <h1>Your guess: {{{ $guess }}}</h1>
    <h1>My number:  {{{ $roll }}}</h1>

    @if ($guess == $roll)
    	<h2>Your guess matched! Congratulations</h2>
    @else
    	<h2>Your guess didn't match. Better luck next time!</h2>
    @endif
 @stop