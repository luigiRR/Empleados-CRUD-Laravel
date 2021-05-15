<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>REPORTES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="container">
       <h1 class="text-center">REPORTES</h1>

       <a class="btn btn-success" href="{{url('reporte/create')}}">Crear reporte</a>

        <table class="table mt-3">
            <thead class="p-3 mx-auto bg-primary text-dark">
                <tr class="mx-5">
                    <th>Id</th>
                    <th>NOMBRE REPORTE</th>
                    <th>DESCRIPCION FALTA</th>
                    <th>EMPLEADO ID</th>
                    <th>FALTA ID</th>
                    <th>ACIONES</th>
                <tr>
            </thead>

            <tbody>
                @foreach ($reportes as $reporte)
                <tr>
                    <td>{{$reporte->id}}</td>
                    <td>{{$reporte->REP_Nombre}}</td>
                    <td>{{$reporte->REP_Descripcion}}</td>
                    <td>{{$reporte->empleado_id}}</td>
                    <td>{{$reporte->falta_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

       <a href="{{url('/')}}" class="btn btn-primary">Regresar</a>

    </body>
</html>