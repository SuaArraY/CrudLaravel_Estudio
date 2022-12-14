<!--Vista Padre --(de las vistas hijas se le puede pasar variables)-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-light">
    <div class="container shadow bg-ligth">
        <div class="row">
            <div class="col-sm-12">
                <h1>Tutorial YT</h1>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('tarea.create') }}" class="btn btn-link">Crear Nueva Tarea</a>
                <a href="{{ route('tarea.index') }}" class="btn btn-link">Listar Tareas</a>
            </div>
            <div class="col-sm-12">
                <!--Esta variable llama a la vista hija-->
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>