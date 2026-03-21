<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>Superheroes</h1>
    <button><a href="{{ route('superheroes.create') }}">Create New Superhero</a></button>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>Gender</th>
                <th>Universe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroes as $superhero)
                <tr>
                    <td>{{ $superhero->id }}</td>
                    <td>{{ $superhero->name }}</td>
                    <td>{{ $superhero->real_name }}</td>
                    <td>{{ $superhero->gender }}</td>
                    <td>{{ $superhero->universe_id }}</td>
                    <td><button><a href="{{ route('superheroes.show', $superhero->id) }}">View</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>