<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ROLES CREATE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="container">

        <h1 class="text-center text-primary" >CREAR ROL</h1>

            <form action="{{url('roles/store')}}" method="post">
            @csrf
                <label for="ROL_Nombre">NOMBRE ROL</label>
                <input type="text" name="ROL_Nombre" class="form-control">
                <br>
                <label for="ROL_Descripcion">DESCRIPCION ROL</label>
                <input type="text" name="ROL_Descripcion" class="form-control">
                <br>
                <input type="submit" value="Registrar Rol" class="btn btn-success">
            </form>
            <br>

            <a href="{{url('/roles')}}" class="btn btn-primary display-flex">Regresar</a>
    </body>
</html>