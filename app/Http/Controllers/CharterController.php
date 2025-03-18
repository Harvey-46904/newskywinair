<?php

namespace App\Http\Controllers;

use App\Models\Charter;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailCharter;
use Redirect;
class CharterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombre="Charter";
        $charters=DB::table("charters")->get();
       return view('dashboard.formulario_charter',compact("nombre","charters"));
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
      $chater=new Charter;
      $chater->Nombre= $request->Nombre;
      $chater->Correo= $request->Correo;
      $chater->Telefono= $request->Telefono;
      $chater->Anotacion =$request->Anotacion;
      $chater->origen =$request->origen;
      $chater->destino =$request->destino;
      $chater->dates= $request->dates;
      $chater->save();
      $correos=array("harveympv@hotmail.com");
        Mail::to($correos)->send( new EmailCharter($request->all()));
        return Redirect::to('/')->with('msg_enviado', 'Su chater se a enviado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Charter  $charter
     * @return \Illuminate\Http\Response
     */
    public function show(Charter $charter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Charter  $charter
     * @return \Illuminate\Http\Response
     */
    public function edit(Charter $charter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Charter  $charter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Charter $charter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Charter  $charter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charter $charter)
    {
        //
    }
}
