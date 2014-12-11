@extends('layouts.master')
@section('content')
<!-- @include('partials.navbar') -->

<div class="posts col-md-8">
	<div class="container-fluid">
		@foreach ($posts as $post)
			@include('partials.post')
		@endforeach
	</div>
</div>

<!-- right column -->

<!-- name card -->
<div class="column-right col-md-4">
	<div class="container-fluid">
		<div id="name-card">
			<div id="profile-pic-row" class="row">
				<div id="profile-pic-container" class="container-fluid">
					<img class="img-circle img-responsive" id="profile-pic" src="/img/profile-pic-goat.jpg" height="100" width="100">
				</div>
			</div>
			<div id="name-description-row" class="row">
				<div id="name-desctiption-container" class="container-fluid">
					<h2>Louis Hawkins</h2>
					<h4>Developer, Goat Hearder, International Supermodel</h4>
					<h5>Linux, Apache, MySQL, PHP, Javascript</h5>
				</div>
			</div>
		</div>
	</div>
</div>


@stop
