<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use App\Models\asignatura;
use App\Models\inscripcion;
use App\Models\profesor;
use Illuminate\Http\Request;

class asignaturaController extends Controller
{
    //
    public function index(){
        /*$asignatura = asignatura::all();
        $profesor = profesor::all();
        $alumno = alumno::all();
        $inscripcion = inscripcion::all();
        return view('Welcome', compact('asignatura','profesor','alumno','inscripcion'));*/
        $asignatura = asignatura::all();
        return view('asignaturas.index',compact('asignatura'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('asignaturas.create');
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
        $asignatura = new asignatura();
        $asignatura->nombre = $request->nombre;
        $asignatura->save();

        return redirect()->route('asignatura.index');
        /*$request->validate([
            'nombre'=>'required',
        ]);
        $asignatura=asignatura::create($request->all());
        return redirect()->route('asignatura.index',$asignatura)
        ->with('info','la asignatura se registro con éxito');
        return $request->all();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($asignatura)
    {
        //$asignatura = asignatura::find();
        //return view('asignaturas.show', compact('asignatura'))
        //return view('asignaturas.show', compact('$asignatura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(asignatura $asignatura)
    {
        //
        //$asignatura = asignatura::find($asignatura);
        //return view('asignatura.edit',compact('asignatura'));
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
    }
}
