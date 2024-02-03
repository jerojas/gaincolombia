<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use Illuminate\Http\Request;
use App\Http\Requests\CrearAsistentesRequest;
use Illuminate\Support\Facades\DB;
Use Session;

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

        $asistente = $request->get('asistente_id');
        $validar_asistente = DB::table('asistentes')
        ->select('asistente_id')
        ->where('asistente_id', '=', $asistente)
        ->get();

        if(count($validar_asistente) >= 1){

            Session::flash('message','CODIGO USADO'); 
          return view('asistente.create') ->with('error','EL CÓDIGO YA EXISTE');
          

        }else{

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
            $asistentes->user =\Auth::user()->name;
    
            $asistentes->save();
    
            return redirect('/asistentes')->with('success', 'Formulario validado exitosamente!');
         
        }
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
    public function edit($id)
    {
        
        $asistente = Asistente::find($id);

        return view('asistente.edit')->with('asistente',$asistente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asistente = Asistente::find($id);

        $asistente->asistente_id = $request->get('asistente_id');
        $asistente->first_name = $request->get('first_name');
        $asistente->last_name = $request->get('last_name');
        $asistente->document = $request->get('document');
        $asistente->profesion = $request->get('profesion');
        $asistente->email = $request->get('email');
        $asistente->phone = $request->get('phone');
        $asistente->city = $request->get('city');
        $asistente->state = $request->get('state');
        $asistente->type_assist = $request->get('type_assist');

        $asistente->save();
        
        return redirect('/asistentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asistente = Asistente::find($id);
        $asistente ->delete();

         
        return redirect()->back()->with('eliminar','ok');
    }
}
