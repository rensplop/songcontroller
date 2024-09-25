<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Song</title>
</head>
<body>
    <h1>Create New Song</h1>

    <form action="/songs" method="POST">
        @csrf

        <label for="name">Song Name:</label>
        <input type="text" id="name" name="name">

        <button type="submit">Add Song</button>
    </form>

    <br>
    <a href="{{ url('/songs') }}">Back to Song List</a>
</body>
</html>