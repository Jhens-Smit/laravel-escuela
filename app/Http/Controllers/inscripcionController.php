<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inscripcion;

class inscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inscripcion = inscripcion::all();
        return view('inscripcions.index', compact('inscripcion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inscripcions.create');
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
            "fk_alumno"=>'required',
            "fk_profesor"=>'required',
            "fk_asignatura"=>'required',
            "fecha"=>'required',
        ]);
        $inscripcion = new inscripcion();
        $inscripcion->fk_alumno = $request->fk_alumno;
        $inscripcion->fk_profesor = $request->fk_profesor;
        $inscripcion->fk_asignatura = $request->fk_asignatura ;
        $inscripcion->fecha = $request->fecha;

        $inscripcion->save();

        return redirect()->route('inscripcion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(inscripcion $inscripcion)
    {
        //
        return view('inscripcions.show', compact('inscripcion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($inscripcion)
    {
        //
        $inscripcion = inscripcion::find($inscripcion);
        return view('inscripcions.edit', compact('inscripcion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $inscripcion)
    {
        //
        $request->validate([
            "fk_alumno"=>'required',
            "fk_profesor"=>'required',
            "fk_asignatura"=>'required',
            "fecha"=>'required',
        ]);
        $inscripcion = inscripcion::find($inscripcion);
        $inscripcion->fk_alumno = $request->fk_alumno;
        $inscripcion->fk_profesor = $request->fk_profesor;
        $inscripcion->fk_asignatura = $request->fk_asignatura ;
        $inscripcion->fecha = $request->fecha;

        $inscripcion->save();

        return redirect()->route('inscripcion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($inscripcion)
    {
        //
        $inscripcion = inscripcion::find($inscripcion);
        $inscripcion->delete();
        return redirect()->route('inscripcion.index');
    }
}
