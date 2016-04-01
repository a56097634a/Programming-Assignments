<!doctype html> <html lang="en"> <head>
<meta charset="utf-8" />
<title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384- 1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> </head>
<body>
<!-- Your code goes here -->
<form action="/story/store" method="post">
  Title: 
  <input type="string" name="title"><br>
  Story: 
  <input type="text" name="story"><br>
  Location: 
  <select name="location_id"> 
  	@foreach ($locations as $location)
		<option value="{{ $location->id }}">{{ $location->value }}</option> 
	@endforeach
  </select><br>
  Published:  
  <input type="radio" name="published" value="TRUE" > True  
  <input type="radio" name="published" value="FALSE" checked> False<br>
  <input type="submit" value="Submit">
</form>
<!-- Your code goes here -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>