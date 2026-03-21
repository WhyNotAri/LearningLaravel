<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>Universes</h1>
    <button><a href="{{ route('universes.create') }}">Create New Universe</a></button>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($universes as $universe)
                <tr>
                    <td>{{ $universe->id }}</td>
                    <td>{{ $universe->name }}</td>
                    <td>{{ $universe->company }}</td>
                    <td>{{ $universe->age }}</td>
                    <td><button><a href="{{ route('universes.show', $universe->id) }}">View</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>