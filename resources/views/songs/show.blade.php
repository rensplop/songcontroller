<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Detail</title>
</head>
<body>
<h1>Song: {{ $song }}</h1>
    
    <a href="{{ url('/songs/' . $index . '/edit') }}">Edit Song</a>
    
    <br>
    <a href="{{ url('/songs') }}">Back to Song List</a>
</body>
</html>