    
    
<h1>{{ $modo }} Empleados</h1>

@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input class="form-control" type="text" name="Nombre" 
            value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
</div>

<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input class="form-control" type="text" name="ApellidoPaterno" 
            value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
</div>

<div class="form-group">
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input class="form-control" type="text" name="ApellidoMaterno" 
            value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
</div>

<div class="form-group">
    <label for="DNI">DNI</label>
    <input class="form-control" type="text" name="DNI" 
            value="{{ isset($empleado->DNI)?$empleado->DNI:old('DNI') }}" id="DNI">
</div>

<div class="form-group">
    <label for="Correo">Correo</label>
    <input class="form-control" type="text" name="Correo" 
            value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
</div>

<div class="form-group">
    <label for="Direccion">Direccion</label>
    <input class="form-control" type="text" name="Direccion" 
            value="{{ isset($empleado->Direccion)?$empleado->Direccion:old('Direccion') }}" id="Direccion">
</div>

<div class="form-group">
    <select name="role_id" class="form-control">
        <option value="">Seleccione Rol</option>
        @foreach ($roles as $role)   
        <option value="{{$role->id}}"> {{$role->ROL_Nombre}} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select name="contrato_id" class="form-control">
        <option value="">Seleccione Contrato</option>
        @foreach ($contratos as $contrato)   
        <option value="{{$contrato->id}}"> {{$contrato->CONT_Numero}} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="foto"></label>
    @if(isset($empleado->foto))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">
    @endif
    <input type="file" name="foto" value="" id="foto">
</div>

    <input type="submit" value="{{ $modo }} Datos" class="btn btn-success">

    <a class="btn btn-primary"href="{{url('empleado/')}}"> <i class="fas fa-long-arrow-alt-left"></i> Back to Home</a>
    