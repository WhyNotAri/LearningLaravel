<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>{{ $superheroes->name }}</h1>
    
    <table>
        <tbody>
            <tr>
                <td><strong>Real Name:</strong> {{ $superheroes->real_name }}</td>
            </tr>
            <tr>
                <td><strong>Gender:</strong> {{ $superheroes->gender }}</td>
            </tr>
            <tr>
                <td><strong>Universe:</strong> {{ $superheroes->universe_id }}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <button><a href="{{ route('superheroes.edit', $superheroes->id) }}">Edit Superhero</a></button>
    <br><br>
    <form action="{{ route('superheroes.destroy', $superheroes->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete Superhero"></button>
    </form>
    <br>
    <button><a href="{{ route('superheroes.index') }}">Back to Superheroes</a></button>
    <br><br>
</body>
</html>