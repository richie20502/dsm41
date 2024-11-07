@extends('layouts.app')

@section('content')

<form action="{{ route('login') }}" method="post">
    @csrf
    <label for="">Correo electronico</label>
    <input type="email" name="email" id="email">
    <label for="">Contrasena</label>
    <input type="password" name="password" id="password">
    <button type="submit"> Iniciar sesion</button>
</form>



@endsection