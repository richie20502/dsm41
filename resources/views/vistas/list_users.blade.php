@extends('layouts.app')



@section('title', 'Listado de usuarios')

@section('content')
<h1>USER LIST</h1>
<table class="table table-striped">
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->name }}</></td>
            <td>
                <a href="{{ route('user.update', $usuario->id)}}" class="btn btn-primary"> Edit </a>
            </td>
            <td>
                <a href="{{ route('user.destroy', $usuario->id)}}" class="btn btn-danger"> Delete </a>
            </td>
        </tr>
    @endforeach
</table>
{{ $usuarios->links('pagination::bootstrap-4') }}
@endsection









@section('styles')
    <link rel="stylesheet" href="hola.css">
@endsection


@section('title', 'Listado de usuarios')