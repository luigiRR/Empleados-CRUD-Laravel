<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>REPORTE CREATE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="container">

        <h1 class="text-center text-primary" >CREAR REPORTES</h1>
            <form action="{{url('reporte/store')}}" method="post">
            @csrf
                <label for="REP_Nombre">NOMBRE REPORTE</label>
                <input type="text" name="REP_Nombre" class="form-control">
                <br>
                <label for="REP_Descripcion">DESCRIPCION REPORTE</label>
                <input type="text" name="REP_Descripcion" class="form-control">
                <br>

                <div class="form-group">
                    <select name="empleado_id" class="form-control">
                        <option value="">Seleccione Empleado</option>
                        @foreach ($empleados as $empleado)   
                        <option value="{{$empleado->id}}"> {{$empleado->Nombre}} </option>
                        @endforeach
                    </select>
                </div>
                <br>

                <div class="form-group">
                    <select name="falta_id" class="form-control">
                        <option value="">Seleccione Falta</option>
                        @foreach ($faltas as $falta)   
                        <option value="{{$falta->id}}"> {{$falta->FAL_Descripcion}}</option> </option>
                        @endforeach
                    </select>
                </div>
                <br>

                <input type="submit" value="Registrar falta" class="btn btn-success">
            </form>

    </body>
</html>