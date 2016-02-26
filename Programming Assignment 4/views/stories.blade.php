<html>
    <body>
		@foreach ($stories as $story) 
		<p>{{ $story->story }}</p>
		@endforeach
    </body>
</html>