<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Application @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    @yield('styles')
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
            <li><a href="{{ route('register') }}">Registrarse</a></li>
            @if(auth()->check())
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Cerrar Sesión</button>
                    </form>
                </li>
            @endif
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>