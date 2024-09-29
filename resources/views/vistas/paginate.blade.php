<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination justify-content-center">
        {{ $usuarios->links('pagination::bootstrap-4') }}
    </div>
@endsection
