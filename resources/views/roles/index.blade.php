<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ROLES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="container">
       <h1 class="text-center">ROLES</h1>

       <a class="btn btn-success" href="{{url('roles/create')}}">Crear rol</a>

        <table class="table mt-3">
            <thead class="p-3 mx-auto bg-primary text-dark">
                <tr class="mx-5">
                    <th>Id</th>
                    <th>NOMBRE ROL</th>
                    <th>DESCRIPCIOPN ROL</th>
                    <th class="text-center">ACCIONES</th>
                <tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->ROL_Nombre}}</td>
                    <td>{{$role->ROL_Descripcion}}</td>
                    <td>
                        <a class="btn btn-warning"href="{{url('/roles/'.$role->id.'/edit')}}">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

       <a href="{{url('/')}}" class="btn btn-primary">Regresar</a>

    </body>
</html>