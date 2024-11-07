@extends('layouts.app')

@section('content')
<div>
    <h2>Iniciar Sesión</h2>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Iniciar Sesión</button>
    </form>
</div>
@endsection
