<?php

namespace App\Http\Controllers;

use App\Models\Destinos;
use Illuminate\Http\Request;
use DB;
use Redirect;
class DestinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombre="Destinos";
        $destinos=DB::table("destinos")->get();
        $origenes=DB::table("origenes")->select("Ciudad")->get();
       return view('dashboard.formulario_destinos',compact("nombre","destinos","origenes"));
    }

    public function webpage_principal(){
        $destinos=DB::table("destinos")->select("ciudad_destino")->get();
        $origenes=DB::table("origenes")->select("Ciudad")->get();
        
        $paquetes=DB::table("paquetes")
        ->select("paquetes.*","destinos.ciudad_destino")
        ->join("destinos","paquetes.Id_destino","destinos.id")
        ->get();
        
    return view('webpage.index',compact("destinos","paquetes","origenes"));
    }

    public function destino_detalle($id){
        //return response(["data"=>$id]);
        $destino=DB::table("paquetes")
        ->select("paquetes.*","destinos.ciudad_destino")
        ->join("destinos","paquetes.Id_destino","destinos.id")
        ->where("paquetes.id","=",$id)
        ->first();
        
        $origenes=DB::table("origenes")->select("Ciudad")->get();
        return view('webpage.producto_datelle',compact("destino","origenes"));
    }

}
