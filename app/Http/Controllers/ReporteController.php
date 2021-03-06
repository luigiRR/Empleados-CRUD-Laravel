<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;
use App\Models\Empleado;
use App\Models\Falta;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['reportes']=reporte::paginate(15);
        return view('reporte.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datos1['empleados']=Empleado::paginate();
        $datos2['faltas']=falta::paginate();
        return view('reporte.create', $datos1, $datos2);
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
        $datosreporte = request()->except('_token');
        reporte::insert($datosreporte);
        return redirect('reporte');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        /*dd($id);
        $reportes=reporte::findOrFail($id);
        return view('reporte.edit', compact('reportes'));*/

        $reporte=reporte::findOrFail($id);
        $datos['empleado']=Empleado::paginate();
        $datos['falta']=falta::paginate();
        return view('reporte.edit', $datos, compact('reporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       /*$reportes=request()->except(['_token', '_method']);
        reporte::where('id', '=', $id)->update($reportes);
        return redirect('reporte');*/
        $reporte=request()->except(['_token', '_method']);
        reporte::where('id', '=', $id)->update($reporte);
        return redirect('reporte');

        /*
        if($request ->attribute('empleado_id', 'falta_id')){
            $campos= ['empleado_id'=>'required'];
            $campos= ['falta_id'=>'required'];
            $mensaje= ['empleado_id.required'=>'El empleado es requido'];
            $mensaje= ['falta_id.required'=> 'La falta es requerida'];
        }

        $this->validate($request, $campos, $mensaje);

        $datos = request() -> except(['_token', '_method']);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $reporte=reporte::findOrFail($id);
        $reporte->delete();
        return redirect('reporte');
    }
}
