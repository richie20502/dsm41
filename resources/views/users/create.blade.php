<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <button type="submit">Crear Usuario</button>
    </form>
</body>
</html>
