
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EMPLEADO EDIT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="container">

        @if(Session :: has('mensaje'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
    <h1 class="text-center text-primary" >EDITAR REPORTE</h1>
            <form action="/reporte/{{$reporte->id}}" class="form-control" method="post">
            @csrf

                <input type="hidden" name="_method" value="put">

                <label for="REP_Nombre">NOMBRE REPORTE</label>
                <input type="text" name="REP_Nombre" class="form-control" value="{{$reporte->REP_Nombre}}">
                <br>
                <label for="REP_Descripcion">DESCRIPCION REPORTE</label>
                <input type="text" name="REP_Descripcion" class="form-control" value="{{$reporte->REP_Descripcion}}">
                <br>
                <label for="empleado_id" >ID EMPLEADO</label>
                <select name="empleado_id" class="form-control">
                    <option value="">SELECCIONE EL EMPLEADO</option>
                    @foreach ($empleado as $empleado)
                        <option value="{{$empleado->id}}">{{$empleado->Nombre}}</option>
                    @endforeach
                </select>
                <br><br>
                <label for="falta_id">ID FALTA</label>
                <select name="falta_id" class="form-control">
                    <option value="">SELECCIONE EL FALTA</option>
                    @foreach ($falta as $falta)
                        <option value="{{$falta->id}}">{{$falta->FAL_Descripcion}}</option>
                    @endforeach
                </select>
                <br><br>
                <input type="submit" value="Actualizar Empleado" class="btn btn-success">
                <br><br>
                <a href="{{url('/reporte')}}" class="btn btn-primary">Regresar</a>
            </form>
    </body>
</html>
