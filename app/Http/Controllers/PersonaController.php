<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $datos['personas']=Persona::where("estado","=",1)->select("id","nombre","apellido_paterno","apellido_materno","dni")->get();
     return view('persona.listar', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("persona.agregar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona;

        $persona->nombre = $request->input("nombre");
        $persona->apellido_paterno = $request->input("apellido_paterno");
        $persona->apellido_materno = $request->input("apellido_materno");
        $persona->dni = $request->input("dni");
        $persona->estado = 1;
        $persona->save();
        return redirect('persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::findOrfail($id);
        return view('persona.editar', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $datosPersona=Request()->except([('_token'),('_method')]);
       Persona::where('id','=',$id)->update($datosPersona);
       return redirect('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(persona $persona)
    {
        //
    }
}
