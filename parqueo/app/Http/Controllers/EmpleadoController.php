<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado; 

class EmpleadoController extends Controller
{

    protected $fillable = ['nombre', 'cargo', 'salario', 'fecha_contrato'];


    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.lista', compact('empleados'));
    }


    public function create()
    {
        return view('empleados.createEmp');
    }

    public function store(Request $request)
    {
    $datosEmpleado = $request->except('_token');

    Empleado::insert($datosEmpleado);

    return redirect()->route('empleados.index');
    }


    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    public function edit(Empleado $empleado)
    {
        return view('empleados.editEmp', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
    $datosEmpleado = request()->except(['_token','_method']);

    Empleado::where('id', $id)->update($datosEmpleado);

    $empleado = Empleado::findOrFail($id);
    return redirect()->route('empleados.index');
    }


    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index');
    }
}
