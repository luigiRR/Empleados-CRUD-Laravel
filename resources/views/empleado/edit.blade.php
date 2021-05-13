
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
        
    <h1 class="text-center text-primary" >EDITAR EMPLEADO</h1>
            <form action="/empleado/{{$contrato->id}}" method="post">
            @csrf

                <input type="hidden" name="_method" value="put">

                <label for="Nombre">NOMBRE</label>
                <input type="text" name="Nombre" class="form-control" value="{{$empleado->Nombre}}">
                <br>
                <label for="ApellidoPaterno">APELLIDO PATERNO</label>
                <input type="text" name="ApellidoPaterno" class="form-control" value="{{$empleado->ApellidoPaterno}}">
                <br>
                <label for="ApellidoMaterno">APELLIDO MATERNO</label>
                <input type="text" name="ApellidoMaterno" class="form-control" value="{{$empleado->ApellidoMaterno}}">
                <br>
                <label for="DNI">DNI</label>
                <input type="text" name="DNI" class="form-control" value="{{$empleado->DNI}}">
                <br>
                <label for="Correo">CORREO</label>
                <input type="text" name="Correo" class="form-control" value="{{$empleado->Correo}}">
                <br>
                <label for="Direccion">NOMBRE</label>
                <input type="text" name="Direccion" class="form-control" value="{{$empleado->Direccion}}">
                <br>
                <label for="foto">FOTO</label>
                <input type="text" name="foto" class="form-control" value="{{$empleado->foto}}">
                <br>
                <label for="role_id">ID Aula</label>
                <select name="role_id">
                    <option value="">SELECCIONE EL ROL</option>
                    @foreach ($role as $role)
                    <option value="{{$role->id}}">{{$role->nombre_comun}}</option>
                    @endforeach
                </select>
                <input type="submit" value="Actualizar Contrato" class="btn btn-success">
            </form>
            <br>
            <a href="{{url('/contrato')}}" class="btn btn-primary">Regresar</a>
    </body>
</html>
