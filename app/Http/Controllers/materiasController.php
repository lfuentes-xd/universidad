<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materias;
use App\Models\carreras;
use App\Models\alumno;

class materiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias=materias::all();
        return view('materias.index',['materias'=>$materias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras=carreras::all();
        return view('materias.altas',['carreras'=>$carreras]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaMateria= new materias;
        $nuevaMateria->materias = $request->nombre;
        $nuevaMateria->carrera = $request->carrera;
        $nuevaMateria->creditos= $request->creditos;

        $nuevaMateria->save();
        return redirect('/materias');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $materiaEditar=materias::findorfail($id);
        $carreras=carreras::all();
        return view("materias.actualizacion",['materias'=>$materiaEditar,'carreras'=>$carreras]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nuevaMateria=materias::findorfail($id);
        $nuevaMateria->materias = $request->nombre;
        $nuevaMateria->carrera = $request->carrera;
        $nuevaMateria->creditos= $request->creditos;

        $nuevaMateria->save();
        return redirect('/materias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        materias::destroy($id);
        return redirect('/materias');
    }
}
