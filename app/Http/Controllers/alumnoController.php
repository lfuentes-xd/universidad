<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumno;
use App\Models\carreras;

class alumnoController extends Controller
{
     //se pone para el select
    public function index()
    {
        $alumno=alumno::all();
        return view('alumnos.index',["alumnos" =>$alumno]);
    }

    //altas
    public function create()
    {
        $carreras=carreras::all();
        return view('alumnos.alta',["carreras"=>$carreras]);
    }

    /**
     * para crear un nuevo registro.
     */
    public function store(Request $request)
    {
        $nuevoAlumno = new alumno();
        $nuevoAlumno->matricula = $request->matricula;
        $nuevoAlumno->nombre = $request->nombre;
        $nuevoAlumno->apellidoP = $request->apPat;
        $nuevoAlumno->apellidoM = $request->apMat;
        $nuevoAlumno->sexo = $request->sexo;
        $nuevoAlumno->edad = $request->edad;
        $nuevoAlumno->carrera=$request->carrera_id;
        if ($request->hasFile('foto')) {
            $nuevoAlumno->foto = $request->file('foto')->store('uploads', 'public');
        }

        $nuevoAlumno->save();
        return redirect('/alumnos');
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
        $alumnoeditar=alumno::findorfail($id);
        $carreras=carreras::all();
        return view('alumnos.actualizacion',['alumnos'=>$alumnoeditar, 'carreras'=>$carreras]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nuevoalumno=alumno::findorfail($id);
        $nuevoalumno->matricula=$request->matricula;
        $nuevoalumno->nombre=$request->nombre;
        $nuevoalumno->apellidoP=$request->apPat;
        $nuevoalumno->apellidoM=$request->apMat;
        $nuevoalumno->Sexo=$request->sexo;
        $nuevoalumno->edad=$request->edad;
        $nuevoalumno->carrera=$request->carrera_id;
        if ($request->hasFile('foto')){
            $nuevoalumno->foto=$request->file('foto')->store('uploads','public');
        }
        $nuevoalumno->save();
        return redirect('/alumnos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        alumno::destroy($id);
        return redirect('/alumnos');
    }
}
