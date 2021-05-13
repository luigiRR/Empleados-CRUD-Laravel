<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Contrato;
use App\Models\Role;

use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscar');
        $datos['empleados']=Empleado::where('Nombre','Like', '%'.$buscar.'%')->paginate(5);
        return view('empleado.index', $datos, ['buscar'=>$buscar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datos['contratos']=contrato::paginate();
        $datos['roles']=role::paginate();
        return view('empleado.create', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos = [
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'DNI'=>'required|string|max:8',
            'Correo'=>'required|string|max:100',
            'Direccion'=>'required|string|max:100',
            'foto'=>'required|max:1000|mimes:jpeg,png,jpg'
        ];
        $mensaje = [
            'required'=>'El :attribute es requido',
            'Direccion.required'=>'La direccion es requida',
            'foto.required'=>'La foto es requida'
        ];

        $this->validate($request, $campos, $mensaje);

        //$datosEmpleado = request() -> all();
        $datosEmpleado = request() -> except('_token');

        if($request -> hasFile('foto')){
            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public');

        }

        Empleado::insert($datosEmpleado);

        //return response() ->  json($datosEmpleado);
        return redirect('empleado')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos = [
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'DNI'=>'required|string|min:8|max:8',
            'Correo'=>'required|string|max:100',
            'Direccion'=>'required|string|max:100',
            
        ];
        $mensaje = [
            'required'=>'El :attribute es requido',
            'Direccion.required'=>'La direccion es requida',
        ];

        /*if($request -> hasFile('foto')){
            $campos = ['foto'=>'required|max:1000|mimes:jpeg,png,jpg'];
            $mensaje = ['foto.required'=>'La foto es requida'];
        }*/

        $this->validate($request, $campos, $mensaje);

        //
        $datosEmpleado = request() -> except(['_token', '_method']);

        if($request -> hasFile('foto')){
            $empleado=Empleado::findOrFail($id);
            Storage::delete('public/'.$empleado->foto);
            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public');

        }



        Empleado::where('id', '=', $id)->update($datosEmpleado);
        $empleado=Empleado::findOrFail($id);
        /*$contratos=contrato::findOrFail($id);
        $roles=role::findOrFail($id);*/
        //return view('empleado.edit', compact('empleado'));

        return redirect('empleado')->with('mensaje', 'Empleado Modificado');


    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado=Empleado::findOrFail($id);

        if(Storage::delete('public/'.$empleado->foto)){
            
            Empleado::destroy($id);

        }

        
        return redirect('empleado')->with('mensaje', 'Empleado Borrado');
    }
}
