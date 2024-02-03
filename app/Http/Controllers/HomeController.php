<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use App\Models\Ingreso;
use App\Models\Acceso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
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
        $accesos = Acceso::All();

        $acceso_first = DB::table('accesos')
        ->first();
        

        $total_inscritos = DB::table('asistentes')
        ->count();

       $total_ingresos = DB::table('ingresos')
       ->where('id', '=', $acceso_first->id )
        ->count();

        $pendientes_ingresar =  $total_inscritos-$total_ingresos;

        $staff = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.type_assist', '=', 'staff')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();
//Total por distritos

            $molinos = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'MOLINOS')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $lunapark = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'LUNA PARK')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $redencion = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'REDENCION')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $emmanuel = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'EMMANUEL')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $bellohorizonte = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'BELLO HORIZONTE')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $betania = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'BETANIA')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $santuariosur = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'SANTUARIO SUR')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $israel = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'ISRAEL')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $lucero = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'LUCERO')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $soachac = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'SOACHA C.')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $bosa = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'BOSA')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $soachat = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'SOACHA T.')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();

            $juda = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'JUDA')
            ->where('i.acceso_id', '=', $acceso_first->id )
            ->count();



        $nombre_acceso = DB::table('accesos')
        ->select('description')
        ->where('id', '=', $acceso_first->id)
        ->get();

        $asistentes = DB::table('asistentes as a')
        ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
        ->select('a.asistente_id', 'a.first_name', 'a.last_name','a.document','a.type_assist','i.created_at','i.user')
        ->where('i.acceso_id', '=', $acceso_first->id)
        -> orderBy('i.acceso_id', 'desc')
        ->get();


        return view('dashboard.index')->with('accesos',$accesos)
                                        ->with('total_inscritos',$total_inscritos)
                                        ->with('total_ingresos',$total_ingresos)
                                        ->with('pendientes_ingresar',$pendientes_ingresar)
                                        ->with('staff',$staff)
                                        ->with('nombre_acceso',$nombre_acceso)
                                        ->with('asistentes',$asistentes)
                                        ->with('molinos',$molinos)
                                        ->with('lunapark',$lunapark)
                                        ->with('redencion',$redencion)
                                        ->with('emmanuel',$emmanuel)
                                        ->with('bellohorizonte',$bellohorizonte)
                                        ->with('betania',$betania)
                                        ->with('santuariosur',$santuariosur)
                                        ->with('israel',$israel)
                                        ->with('lucero',$lucero)
                                        ->with('soachac',$soachac)
                                        ->with('bosa',$bosa)
                                        ->with('soachat',$soachat)
                                        ->with('juda',$juda);
        }


    public function dash(Request $request){

        $acceso_id = $request->get('id');

        $accesos = Acceso::All();

        $total_inscritos = DB::table('asistentes')
        ->count();

        $total_ingresos = DB::table('ingresos')
        ->where('acceso_id', '=', $acceso_id)
        ->count();

        $nombre_acceso = DB::table('accesos')
        ->select('description')
        ->where('id', '=', $acceso_id)
        ->get();

        $pendientes_ingresar =  $total_inscritos-$total_ingresos;

        $staff = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.type_assist', '=', 'staff')
            ->where('i.acceso_id', '=', $acceso_id)
            ->count();

            $molinos = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'MOLINOS')
            ->where('i.acceso_id', '=', $acceso_id )
            ->count();

            $lunapark = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'LUNA PARK')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $redencion = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'REDENCION')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $emmanuel = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'EMMANUEL')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $bellohorizonte = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'BELLO HORIZONTE')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $betania = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'BETANIA')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $santuariosur = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'SANTUARIO SUR')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $israel = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'ISRAEL')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $lucero = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'LUCERO')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $soachac = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'SOACHA C.')
            ->where('i.acceso_id', '=', $acceso_id )
            ->count();

            $bosa = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'BOSA')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $soachat = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'SOACHA T.')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();

            $juda = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->where('a.last_name', '=', 'JUDA')
            ->where('i.acceso_id', '=',  $acceso_id )
            ->count();




            $asistentes = DB::table('asistentes as a')
            ->join('ingresos as i', 'a.asistente_id', '=', 'i.asistente_id')
            ->select('a.asistente_id', 'a.first_name', 'a.last_name','a.document','a.type_assist','i.created_at', 'i.user')
            ->where('i.acceso_id', '=', $acceso_id)
            -> orderBy('i.acceso_id', 'desc')
            ->get();

            return view('dashboard.index') ->with('total_inscritos',$total_inscritos)
                                            ->with('total_ingresos',$total_ingresos)
                                            ->with('pendientes_ingresar',$pendientes_ingresar)
                                            ->with('dash','ok')
                                            ->with('staff',$staff)
                                            ->with('accesos',$accesos)
                                            ->with('nombre_acceso',$nombre_acceso)
                                            ->with('asistentes',$asistentes)
                                            ->with('molinos',$molinos)
                                        ->with('lunapark',$lunapark)
                                        ->with('redencion',$redencion)
                                        ->with('emmanuel',$emmanuel)
                                        ->with('bellohorizonte',$bellohorizonte)
                                        ->with('betania',$betania)
                                        ->with('santuariosur',$santuariosur)
                                        ->with('israel',$israel)
                                        ->with('lucero',$lucero)
                                        ->with('soachac',$soachac)
                                        ->with('bosa',$bosa)
                                        ->with('soachat',$soachat)
                                        ->with('juda',$juda);

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
        //
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
