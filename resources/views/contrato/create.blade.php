<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CONTRATO CREATE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="container">

        <h1 class="text-center text-primary" >CREAR CONTRATRO</h1>
            <form action="{{url('contrato/store')}}" method="post">
            @csrf
                <label for="CONT_Numero">CODIGO CONTRATO</label>
                <input type="text" name="CONT_Numero" class="form-control">
                <br>
                <label for="CONT_Fecha">FECHA CONTRATO</label>
                <input type="date" name="CONT_Fecha" class="form-control">
                <br>
                <input type="submit" value="Registrar Contrato" class="btn btn-success">
            </form>

    </body>
</html>