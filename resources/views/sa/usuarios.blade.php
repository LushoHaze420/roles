<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Listado de nuevos usuarios</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/adminusuarioscreados.css')}}">
</head>

<body class="p-3 m-1 border-1 adminusuarioscreados">
    <div class="container">
        <p><a class="btn btn-primary" href="#">Regresar a capacitaciones</a></p> {{--boton para volver a seleccionar capacitación--}}
        <p><a class="btn btn-primary" href="#">Ingresar nuevo usuario</a></p> {{--boton para volver a crear nuevo usuario--}}
        <table class="table">
            <thead>
                <th>Id<br>Documentos</th>
                <th>Rut<br>Nuevo Usuario</th>
                <th>Nombre<br>Nuevo Usuario</th>
                <th>Apellidos<br>Nuevo Usuario</th>
                <th>Email<br>Nuevo Usuario</th>
                <th>Rol<br>Nuevo Usuario</th>
            </thead>

            <tbody>
                @forelse($sausuarioscreados as $sauc)
                    <tr>
                        <td>{{ $sauc->id }}</td>
                        <td>{{ $sauc->rut_NU }}</td>
                        <td>{{ $sauc->nombre_NU }}</td>
                        <td>{{ $sauc->apellido_NU }}</td>
                        <td>{{ $sauc->email_NU }}</td>
                        <td>{{ $sauc->rol_NU }}</td>
                    </tr>
                @empty
                    <tr>
                        <th>Sin registros</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
