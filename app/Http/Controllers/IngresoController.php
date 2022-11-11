<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use App\Models\Acceso;
use App\Models\Ingreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngresoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id)
    {
        $acceso_id = $id;
        $acceso = Acceso::find($id);

        
            $total_inscritos = DB::table('asistentes as a')
            ->count();

            $total_ingresos = DB::table('ingresos')
            ->where('acceso_id', '=', $acceso_id)
            ->count();

            $pendientes_ingresar =  $total_inscritos-$total_ingresos;

            $staff = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.type_assist', '=', 'staff')
            ->where('i.acceso_id', '=', $acceso_id)
            
            ->count();

                      
          

       return view('ingreso.index')->with('acceso',$acceso)
                                 ->with('total_inscritos',$total_inscritos)
                                 ->with('total_ingresos',$total_ingresos)
                                 ->with('pendientes_ingresar',$pendientes_ingresar)
                                 ->with('staff',$staff);

                             
        
    }


    public function checkin($id)
    {
        $acceso_actual = $id;
        $acceso = Acceso::find($id);

        
            $total_inscritos = DB::table('asistentes as a')
            ->count();

            $total_ingresos = DB::table('ingresos')
            ->where('acceso_id', '=', $acceso_actual)
            ->count();

            $pendientes_ingresar =  $total_inscritos-$total_ingresos;

             $asistentes = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->select('a.asistente_id', 'a.first_name', 'a.last_name','a.document','a.type_assist','i.created_at')
            ->where('i.acceso_id', '=', $acceso_actual)
            -> orderBy('i.acceso_id', 'desc')
            ->get();

           
                  

       return view('ingreso.checkin')->with('asistentes',$asistentes)
                                 ->with('acceso',$acceso)
                                 ->with('total_inscritos',$total_inscritos)
                                 ->with('total_ingresos',$total_ingresos)
                                 ->with('pendientes_ingresar',$pendientes_ingresar);
                               

                             
        
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $asistente_id = $request->get('asistente_id');
        $acceso_id = $request->get('acceso_id');
        
        $total_inscritos = DB::table('asistentes')
        ->count();

        $total_ingresos = DB::table('ingresos')
        ->where('acceso_id', '=', $acceso_id)
        ->count();

        $pendientes_ingresar =  $total_inscritos-$total_ingresos;

        $staff = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.type_assist', '=', 'staff')
            ->where('i.acceso_id', '=', $acceso_id)
            ->Where('i.asistente_id', $asistente_id)
            ->count();

        
        $validar_asistente = DB::table('asistentes')
        ->where('asistente_id', '=', $asistente_id) 
        ->value('asistente_id');

        $validar_ingreso = DB::table('ingresos')
        ->where('asistente_id', '=', $asistente_id)
        ->where('acceso_id', '=', $acceso_id)
        ->value('asistente_id');

        
        $asistentes = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->select('a.asistente_id', 'a.first_name', 'a.last_name', 'a.type_assist','a.document','i.created_at')
            ->where('i.acceso_id', '=', $acceso_id)
            ->Where('i.asistente_id', $asistente_id)
            ->get();


            $acceso = Acceso::find($acceso_id);


        if ($validar_asistente == $asistente_id){      
            
            if ( $validar_ingreso == $asistente_id ){
                
                           
                return view('ingreso.index')->with('asistentes',$asistentes)
                                ->with('acceso',$acceso)
                                 ->with('total_inscritos',$total_inscritos)
                                 ->with('total_ingresos',$total_ingresos)
                                 ->with('pendientes_ingresar',$pendientes_ingresar)
                                    ->with('usado','CÓDIGO USADO')
                                   ->with('validar_ingreso','ok')
                                   ->with('staff',$staff);


            }else{
                $ingresos = new Ingreso();
                $ingresos->asistente_id = $asistente_id;
                $ingresos->acceso_id = $acceso_id;
                $ingresos->user =\Auth::user()->name;
                $ingresos->save();

                $asistente_id = $request->get('asistente_id');
                $acceso_id = $request->get('acceso_id');
                
                $total_inscritos = DB::table('asistentes')
                ->count();

                $total_ingresos = DB::table('ingresos')
                ->where('acceso_id', '=', $acceso_id)
                ->count();

                $pendientes_ingresar =  $total_inscritos-$total_ingresos;


                $asistentes = DB::table('asistentes as a')
                ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
                ->select('a.asistente_id', 'a.first_name', 'a.last_name', 'a.type_assist','a.document','i.created_at')
                ->where('i.acceso_id', '=', $acceso_id)
                ->Where('i.asistente_id', $asistente_id)
                ->get();

                $staff = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.type_assist', '=', 'staff')
            ->where('i.acceso_id', '=', $acceso_id)
            ->Where('i.asistente_id', $asistente_id)
            ->count();
    

                return view('ingreso.index')->with('asistentes',$asistentes)
                                ->with('acceso',$acceso)
                                 ->with('total_inscritos',$total_inscritos)
                                 ->with('total_ingresos',$total_ingresos)
                                 ->with('pendientes_ingresar',$pendientes_ingresar)
                                 ->with('asistent','INGRESO VALIDADO')
                                 ->with('staff',$staff);     
              
                  
                }        
            }else
            {

                return view('ingreso.index')->with('asistentes',$asistentes)
                                ->with('acceso',$acceso)
                                 ->with('total_inscritos',$total_inscritos)
                                 ->with('total_ingresos',$total_ingresos)
                                 ->with('pendientes_ingresar',$pendientes_ingresar)
                                 ->with('validar_asistente','ok')
                                 ->with('staff',$staff);       
              
             }
        
         
          }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingreso = $id;
        // $acceso = Ingreso::find($id);
        $acceso = DB::table('ingresos')
        ->where('asistente_id', '=', $ingreso)
        ->delete();

              
        return redirect()->back(); 
    }
}
