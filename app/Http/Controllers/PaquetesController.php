<?php

namespace App\Http\Controllers;

use App\Models\Paquetes;
use Illuminate\Http\Request;
use DB;
use Redirect;
class PaquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombre="Paquetes";
        $paquetes=DB::table("paquetes")
        ->join("destinos","paquetes.Id_destino","destinos.id")
        ->get();
        $destinos=DB::table("destinos")->get();
       return view('dashboard.formulario_paquetes',compact("nombre","paquetes","destinos"));
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
       $paquetes=new Paquetes;

        $paquetes->Nombre_paquete =$request->Ciudad;
        $paquetes->Id_destino=$request->destino;
        $paquetes->Promocion=$request->descripcion;
        $paquetes->save();
       
        return Redirect::to('/Paquetes')->with('correcto', 'El paquete se creo correctamente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function show(Paquetes $paquetes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function edit(Paquetes $paquetes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paquetes $paquetes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paquetes $paquetes)
    {
        //
    }
}
