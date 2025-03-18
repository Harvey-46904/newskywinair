<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVentas;
use DB;
class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombre="Ventas";
        $ventas=DB::table("ventas")->get();
       return view('dashboard.formulario_ventas',compact("nombre","ventas"));
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

       //return response(["data"=>$request->all()]);
       $chater=new Ventas;
       $chater->Nombre= $request->Nombre;
       $chater->Correo= $request->Correo;
       $chater->Telefono= $request->Telefono;
       $chater->Anotacion =$request->Anotacion;
       $chater->origen =$request->origen;
       $chater->destino =$request->Destino;
       $chater->dates= $request->dates;
       $chater->save();
       $correos=array("harveympv@hotmail.com");
         Mail::to($correos)->send( new EmailVentas($request->all()));
         return Redirect::to('/')->with('msg_enviado', 'Su venta se a enviado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(Ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit(Ventas $ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventas $ventas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ventas $ventas)
    {
        //
    }
}
