<?php

namespace App\Http\Controllers;

use App\Models\Informacion;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailInformacion;
use DB;
class InformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function index(){
        $nombre="Informacion";
        $informacion=DB::table("informacions")->get();
       return view('dashboard.formulario_informacion',compact("nombre","informacion"));
     }
    public function store(Request $request)
    {
       // return response(["data"=>$request->all()]);
        $crear_informacion=new Informacion;
        $crear_informacion->Nombre=$request->name;
        $crear_informacion->Email=$request->email;
        $crear_informacion->Asunto=$request->subject;
        $crear_informacion->Mensaje=$request->message;
        $crear_informacion->save();
        //especificar correo de informacion
        $correos=array("harveympv@hotmail.com");
        Mail::to($correos)->send( new EmailInformacion($request->all()));
        return Redirect::to('/')->with('msg_enviado', 'Su mensaje se a enviado correctamente');
    }

    
}
