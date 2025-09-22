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

    public function webpage_principal(Request $request){

        $dominio = $request->getHost(); // 
         //return response(["data"=>$dominio]);
            // $request->getSchemeAndHttpHost(); // Con esquema (ej: https://vitrix.io)
          
            if ($dominio === 'skywinair.co') {
                $condicion_banner=1;
                $settings=[
                    "logo"=>setting('site.skylogo'),
                    "correo"=>setting('site.correo')
                ];
            } else {
                 $condicion_banner=0;
                $settings=[
                    "logo"=>setting('site.regionallogo'),
                    "correo"=>setting('site.correoregional')
                ];
                
            }
        
        
       //return response(["data"=>$settings]);
        $destinos=DB::table("destinos")->select("ciudad_destino")->get();
        $origenes=DB::table("origenes")->select("Ciudad")->get();
        $aereonaves=DB::table("aereonaves")->get();
        $sms=DB::table("sms")->get();
        $preguntas=DB::table("preguntas")->select()->get();
        $banners=DB::table("banners")->select()->where("estado","radio1")->where('skywinair',$condicion_banner)->get();
        $paquetes=DB::table("paquetes")
        ->select("paquetes.*","destinos.ciudad_destino")
        ->join("destinos","paquetes.Id_destino","destinos.id")
        ->get();
       
    return view('webpage.index',compact("settings","destinos","paquetes","origenes","preguntas","banners","aereonaves","sms"));
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
