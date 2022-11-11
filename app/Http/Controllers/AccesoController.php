<?php

namespace App\Http\Controllers;

use App\Models\Acceso;
use Illuminate\Http\Request;

class AccesoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesos = Acceso::all();
        return view('acceso.index')->with('accesos',$accesos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acceso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accesos = new Acceso();

        $accesos->id = $request->get('id');
        $accesos->evento = $request->get('evento');
        $accesos->description = $request->get('description');
        $accesos->notes = $request->get('notes');
        $accesos->save();

        return redirect('/accesos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acceso  $acceso
     * @return \Illuminate\Http\Response
     */
    public function show(Acceso $acceso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acceso  $acceso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acceso = Acceso::find($id);
        return view('acceso.edit')->with('acceso',$acceso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acceso  $acceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $acceso = Acceso::find($id);

        $acceso->evento = $request->get('evento');
        $acceso->description = $request->get('description');
        $acceso->notes = $request->get('notes');
        

        $acceso->save();

        return redirect('/accesos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acceso  $acceso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acceso = Acceso::find($id);
        $acceso->delete();
      
        return redirect()->back()->with('eliminar','ok');
    }
}
