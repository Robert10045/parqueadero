<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     
    public function index()
    {
        //
        $datos['vehiculos']=vehiculo::paginate(7);
        return view('vehiculo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosVehiculo = $request->all();
        $campos=[
            'placa'=>'requires|string|max:100'
        ];
        $datosVehiculo = $request->except('_token');

        if($request->hasFile('foto')){
            $datosVehiculo['foto']=$request->file('foto')->store('uploads','public');
        }
        Vehiculo::insert($datosVehiculo);
        //return response()->json($datosVehiculo);
        return redirect('vehiculo')->with('mensaje','vehiculo agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);

        return view('vehiculo.edit', compact('vehiculo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosVehiculo = request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $vehiculo = Vehiculo::findOrFail($id);
            Storage::delete('public/'.$vehiculo->foto);
            $datosVehiculo['foto']=$request->file('foto')->store('uploads','public');
        }

        Vehiculo::where('id','=',$id)->update($datosVehiculo);
        $vehiculo = Vehiculo::findOrFail($id);
        return redirect('vehiculo')->with('mensaje','vehiculo editado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $vehiculo = Vehiculo::findOrFail($id);

        if(Storage::delete('public/'.$vehiculo->foto)){
            Vehiculo::destroy($id);
        }
        
        return redirect('vehiculo')->with('mensaje','vehiculo borrado');
        
    }
}
