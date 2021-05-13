
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
            <form action="/falta/{{$falta->id}}" method="post">
            @csrf

                <input type="hidden" name="_method" value="put">

                <label for="FAL_Descripcion">DESCTIPCION DE FALTA</label>
                <input type="text" name="FAL_Descripcion" class="form-control" value="{{$falta->FAL_Descripcion}}">
                <br>
                <label for="FAL_Tipo">TIPO FALTA</label>
                    <select name="FAL_Tipo" class="form-control">
                        <option value="{{$falta->FAL_Tipo}}" selected>Seleccione</option>
                        <option value="leve">Leve</option>
                        <option value="media">Media</option>
                        <option value="grave">Grave</option>
                    </select>
                <br>
                <label for="FAL_Fecha">FECHA FALTA</label>
                <input type="date" name="FAL_Fecha" class="form-control" value="{{$falta->FAL_Fecha}}">
                <br>
                <input type="submit" value="Actualizar Falta" class="btn btn-success">
            </form>
            <br>
            <br>
            <a href="{{url('/falta')}}" class="btn btn-primary">Regresar</a>
    </body>
</html>