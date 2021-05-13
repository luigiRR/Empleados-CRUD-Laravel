<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CONTRATO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="container">
       <h1 class="text-center">CONTRATOS</h1>

       <a class="btn btn-success" href="{{url('contrato/create')}}">Crear contrato</a>

       <table class="table mt-3">
            <thead class="p-3 mx-auto bg-primary text-dark">
                <tr class="mx-5">
                    <th>Id</th>
                    <th>CODIGO COTRATO</th>
                    <th>FECHA CONTRATO</th>
                <tr>
            </thead>

            <tbody>
                @foreach ($contratos as $contrato)
                <tr>
                    <td>{{$contrato->id}}</td>
                    <td>{{$contrato->CONT_Numero}}</td>
                    <td>{{$contrato->CONT_Fecha}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


       <a class="btn btn-primary" href="{{url('/')}}">Regresar</a>

    </body>
</html>