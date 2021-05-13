
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CONTRATO EDIT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="container">
        
    <h1 class="text-center text-primary" >EDITAR CONTRATO</h1>
            <form action="/contrato/{{$contrato->id}}" method="post">
            @csrf

                <input type="hidden" name="_method" value="put">

                <label for="CONT_Numero">NUMERO DE CONTRATO</label>
                <input type="text" name="CONT_Numero" class="form-control" value="{{$contrato->CONT_Numero}}">
                <br>
                <label for="CONT_Fecha">FECHA DE CONTRATO</label>
                <input type="date" name="CONT_Fecha" class="form-control" value="{{$contrato->CONT_Fecha}}">
                <br>
                <input type="submit" value="Actualizar Contrato" class="btn btn-success">
            </form>
            <br>
            <a href="{{url('/contrato')}}" class="btn btn-primary">Regresar</a>
    </body>
</html>