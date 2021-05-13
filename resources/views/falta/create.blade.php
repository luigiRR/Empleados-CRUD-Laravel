<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FALTA CREATE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="container">

        <h1 class="text-center text-primary" >CREAR FALTAS</h1>
            <form action="{{url('falta/store')}}" method="post">
            @csrf
                <label for="FAL_Descripcion">DESCRIPCION FALTA</label>
                <input type="text" name="FAL_Descripcion" class="form-control">
                <br>
                <label for="FAL_Tipo">TIPO FALTA</label>
                    <select name="FAL_Tipo" class="form-control">
                        <option value="" selected>Seleccione</option>
                        <option value="leve">Leve</option>
                        <option value="media">Media</option>
                        <option value="grave">Grave</option>
                    </select>
                <br>
                <label for="FAL_Fecha">FECHA FALTA</label>
                <input type="date" name="FAL_Fecha" class="form-control">
                <br>
                <input type="submit" value="Registrar falta" class="btn btn-success">
            </form>

    </body>
</html>