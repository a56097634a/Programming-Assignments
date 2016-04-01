<html>
    <body>
		@foreach ($stories as $story) 
		<p>{{ $story->story }}</p>
		<ol>
			@foreach($story->tags as $tag) 
				<li>{{ $tag->value }}</li>
			@endforeach 
		</ol>
		@endforeach
    </body>
</html>