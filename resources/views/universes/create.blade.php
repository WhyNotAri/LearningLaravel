<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>Create a New Universe</h1>
    <form action="{{ route('universes.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="company">Company:</label>
        <select id="company" name="company" required>
            <option value="Marvel">Marvel</option>
            <option value="DC">DC</option>
        </select><br><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required><br><br>

        <input type="submit" value="Create Universe">
    </form>
</body>
</html>