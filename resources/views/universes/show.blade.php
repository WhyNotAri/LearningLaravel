<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>{{ $universes->name }}</h1>

    <table>
        <tbody>
            <tr>
                <td><strong>Company:</strong> {{ $universes->company }}</td>
            </tr>
            <tr>
                <td><strong>Age:</strong> {{ $universes->age }}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <button><a href="{{ route('universes.edit', $universes->id) }}">Edit Universe</a></button>
    <br><br>
    <form action="{{ route('universes.destroy', $universes->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete Universe"></button>
    </form>
    <br>
    <button><a href="{{ route('universes.index') }}">Back to Universes</a></button>
    <br><br>
</body>
</html>