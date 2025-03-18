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
       return view('dashboard.formulario_destinos',compact("nombre","destinos"));
    }

    public function webpage_principal(){
        $destinos=DB::table("destinos")->select("Ciudad")->get();
        $paquetes=DB::table("paquetes")
        ->join("destinos","paquetes.Id_destino","destinos.id")
        ->get();

    return view('webpage.index',compact("destinos","paquetes"));
    }

    public function destino_detalle($id){
        $destino=DB::table("paquetes")
        ->join("destinos","paquetes.Id_destino","destinos.id")
        ->where("paquetes.id","=",$id)
        ->first();
        return view('webpage.producto_datelle',compact("destino"));
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
        //return response(["data"=>$request->all()]);
        $ldate = date('Y-m-d-H_i_s');
        $file = $request->file('Imagen');
        $nombre = $file->getClientOriginalName();

        
        \Storage::disk('local')->put("/destinos/".$ldate.$nombre,  \File::get($file));
        $crear_destino=new Destinos;
        $crear_destino->Ciudad=$request->Ciudad;
        $crear_destino->Resena=$request->Resena;
        $crear_destino->Imagen=$ldate.$nombre;
        $crear_destino->save();
        return Redirect::to('/Destinos')->with('correcto', 'El destino se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function show(Destinos $destinos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinos $destinos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destinos $destinos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destinos $destinos)
    {
        //
    }
}
