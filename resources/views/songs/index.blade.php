<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song List</title>
</head>
<body>
    <h1>Song List</h1>

    <a href="{{ url('/songs/create') }}" style="margin-bottom: 20px; display: inline-block;">Create New Song</a>

    <ul>
    @foreach ($songs as $index => $song)
        <li>
            <a href="{{ url('/songs/' . $index) }}">{{ $song }}</a>
        </li>
    @endforeach
    </ul>
</body>
</html>