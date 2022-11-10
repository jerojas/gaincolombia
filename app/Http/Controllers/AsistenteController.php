<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use Illuminate\Http\Request;
use App\Http\Requests\CrearAsistentesRequest;
class AsistenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $asistentes= Asistente::all();
      return view('asistente.index')->with('asistentes',$asistentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asistente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $asistentes = new Asistente();

        $asistentes->asistente_id = $request->get('asistente_id');
        $asistentes->first_name = $request->get('first_name');
        $asistentes->last_name = $request->get('last_name');
        $asistentes->document = $request->get('document');
        $asistentes->profesion = $request->get('profesion');
        $asistentes->email = $request->get('email');
        $asistentes->phone = $request->get('phone');
        $asistentes->city = $request->get('city');
        $asistentes->state = $request->get('state');
        $asistentes->type_assist = $request->get('type_assist');

        $asistentes->save();

        return redirect('/asistentes')->with('success', 'Formulario validado exitosamente!');
        // return redirect('/asistentes')->back()->with('success', 'Formulario validado exitosamente!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function show(Asistente $asistente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistente $asistente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistente $asistente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistente $asistente)
    {
        //
    }
}
