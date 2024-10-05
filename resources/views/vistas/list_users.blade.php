@extends('layouts.app')

@section('title', 'Listado de usuarios')

@section('content')
<h1>USER LIST</h1>
<ul>
@foreach($usuarios as $usuario)
    <li>{{ $usuario->name }}</li>
@endforeach
{{ $usuarios->links('pagination::bootstrap-4') }}
@endsection









@section('styles')
    <link rel="stylesheet" href="hola.css">
@endsection


@section('title', 'Listado de usuarios')