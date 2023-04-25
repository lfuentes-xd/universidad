<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carreras;

class carrerasController extends Controller
{
    #para traer todos los datos
    public function index()
    {
        $carreras=carreras::all();
        return view('carreras.index',["carreras"=>$carreras]);
    }


    #para crear formularios
    public function create()
    {
        return view('carreras.alta');
    }

    #Guardar nueva carrera
    public function store(Request $request)
    {
        $nuevacarrera = new carreras;
        $nuevacarrera->nombre=$request->input('nombre');
        $nuevacarrera->creditos=$request->input('creditos');
        $nuevacarrera->save();
        return redirect('/carreras');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carreraeditar= carreras::findorfail($id);
        return view('carreras.actualizacion',['carreras'=>$carreraeditar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carrera= carreras::findorfail($id);
        $carrera->nombre=$request->input('nombre');
        $carrera->creditos=$request->input('creditos');
        $carrera->save();
        return redirect('/carreras');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        carreras::destroy($id);
        return redirect('/carreras');
    }
}
