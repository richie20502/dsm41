<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <h1>USER LIST</h1>
    <ul>
    @foreach($usuarios as $usuario)
        <li>{{ $usuario->name }}</li>
    @endforeach
    {{ $usuarios->links() }}
</ul>
</body>
</html>