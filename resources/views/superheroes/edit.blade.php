<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>Edit Superhero</h1>
    <form action="{{ route('superheroes.update', $superheroes->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $superheroes->name }}" required><br><br>

        <label for="real_name">Real Name:</label>
        <input type="text" id="real_name" name="real_name" value="{{ $superheroes->real_name }}" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male" @selected($superheroes->gender === 'male')>Male</option>
            <option value="female" @selected($superheroes->gender === 'female')>Female</option>
        </select><br><br>

        <label for="universe_id">Universe ID:</label>
        <input type="number" id="universe_id" name="universe_id" value="{{ $superheroes->universe_id }}" required><br><br>

        <input type="submit" value="Update Superhero">
    </form>
</body>
</html>