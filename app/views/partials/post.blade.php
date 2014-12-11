<div class="post">
	<div class="row post-image-row">
		<div class="container-fluid post-img-container">
			<img class="img-responsive post-img" src="{{ $post->image }}">
		</div>
	</div>
	<h3 class="post-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h3>
	<div class="created-at">{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}</div>
	<p>{{ $post->body }}</p>
</div>