<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>BIENVENIDO</p>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
    <form action="{{ route('user.store') }}" method="post">
        {{ csrf_field() }}
        <label for=""> Nombre</label> <br>
        <input type="text" name="nombre" id=""> <br>
        <input type="submit" value="ENVIO">
    </form>

</body>
</html>