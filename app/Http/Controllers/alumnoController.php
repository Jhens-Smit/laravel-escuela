<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumno;

class alumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumno = alumno::all();
        return view('alumnos.index',compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alumnos.create');
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
        $request->validate([
            "nombre"=>'required',
            "apellido"=>'required',
            "direccion"=>'required',
            "fecha_nacimiento"=>'required',
        ]);
        $alumno = new alumno();
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->direccion = $request->direccion;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;

        $alumno->save();

        return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(alumno $alumno)
    {
        //
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($alumno)
    {
        //
        $alumno = alumno::find($alumno);
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alumno $alumno)
    {
        //
        $request->validate([
            "nombre"=>'required',
            "apellido"=>'required',
            "direccion"=>'required',
            "fecha_nacimiento"=>'required',
        ]);
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->direccion = $request->direccion;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;

        $alumno->save();

        return redirect()->route('alumno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumno $alumno)
    {
        //
        $alumno -> delete();
        return redirect()->route('alumno.index');
    }
}
