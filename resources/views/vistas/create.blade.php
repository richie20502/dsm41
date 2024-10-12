<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Incluir jQuery desde CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluir SweetAlert2 desde CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    <p>BIENVENIDO</p>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form id="user-form" action="{{ route('user.store') }}" method="post">
        {{ csrf_field() }}
        <label for=""> Nombre</label> <br>
        <input type="text" name="nombre" id="nombre"> <br>
        <input type="submit" value="ENVIO">
    </form>

    <script>
        $(document).ready(function() {
            $('#user-form').on('submit', function(event) {
                event.preventDefault(); // Evitar el envío tradicional del formulario

                // Validar el campo de nombre
                if ($('#nombre').val() === '') {
                    Swal.fire("¡Error!", "Por favor, ingresa un nombre.", "error"); // Uso de SweetAlert2
                    return; // Detener la ejecución si el nombre está vacío
                }

                // Recopilar datos del formulario
                var formData = $(this).serialize();

                // Enviar datos usando AJAX
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'), // Usar la acción del formulario
                    data: formData,
                    success: function(response) {
                        // Manejar la respuesta del servidor
                        Swal.fire("¡Éxito!", "Usuario creado exitosamente.", "success").then(() => {
                            // Opcional: Reiniciar el formulario o redirigir a otra página
                            $('#user-form')[0].reset();
                            // Redirigir si es necesario
                            // window.location.href = '/ruta/deseada'; 
                        });
                    },
                    error: function(xhr) {
                        // Manejar errores
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            Swal.fire("¡Error!", value[0], "error"); // Mostrar el primer error
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
