<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>Universes</h1>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>