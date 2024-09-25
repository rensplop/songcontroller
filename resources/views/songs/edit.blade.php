<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song</title>
</head>
<body>
<h1>Edit Song: {{ $song }}</h1>
    
    <form action="/songs/{{ $index }}" method="POST">
        @method('PUT')
        @csrf
        
        <label for="name">Song Name:</label>
        <input type="text" id="name" name="name" value="{{ $song }}">
        
        <button type="submit">Update Song</button>
    </form>

    <br>
    <a href="{{ url('/songs') }}">Back to Song List</a>
</body>
</html>