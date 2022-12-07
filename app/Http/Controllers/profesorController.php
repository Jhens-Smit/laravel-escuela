<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profesor;

class profesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profesor = profesor::all();
        return view('profesors.index',compact('profesor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profesors.create');
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
            "nivel_academ"=>'required'
        ]);
        //primera forma
        $profesor = new profesor();
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->direccion = $request->direccion;
        $profesor->fecha_nacimiento = $request->fecha_nacimiento;
        $profesor->nivel_academ = $request->nivel_academ;

        $profesor->save();
        //segunda forma
        /* $profesor = profesor::created([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'direccion' => $request->direccion,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'nivel_academ' => $request->nivel_academ
        ]); */
       /*  $profesor = profesor::created($request->all()); //modelasignatura */
        return redirect()->route('profesor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(profesor $profesor)
    {
        //
        return view('profesors.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($profesor)
    {
        //
        $profesor = profesor::find($profesor);
        return view('profesors.edit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $profesor)
    {
        //
        $request->validate([
            "nombre"=>'required',
            "apellido"=>'required',
            "direccion"=>'required',
            "fecha_nacimiento"=>'required',
            "nivel_academ"=>'required'
        ]);
        $profesor = profesor::find($profesor);
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->direccion = $request->direccion;
        $profesor->fecha_nacimiento = $request->fecha_nacimiento;
        $profesor->nivel_academ = $request->nivel_academ;

        $profesor->save();

        return redirect()->route('profesor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($profesor)
    {
        //
        $profesor = profesor::find($profesor);
        $profesor->delete();
        return redirect()->route('profesor.index');
    }
}
