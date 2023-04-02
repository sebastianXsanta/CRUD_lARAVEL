<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aerolineas;
use App\Models\Vuelos;
use Illuminate\Http\Request;

class VuelosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *@return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        $aerolineaCon=Aerolineas::findOrFail($id);
        return view('vuelos.create',['VuelosJ'=>$aerolineaCon]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $nuevovuelos = new Vuelos();
        $nuevovuelos->cuidad_de_Partida = $request->get('cuidad_de_PartidaS');
        $nuevovuelos->cuidad_de_destino = $request->get('cuidad_de_destinoS');
        $nuevovuelos->Numero_de_pasajeros = $request->get('Numero_de_pasajerosS');
        $nuevovuelos->novedad_del_vuelo = $request->get('novedad_del_vueloS');
        $nuevovuelos->hora_y_fecha_de_partida = $request->get('hora_y_fecha_de_partidaS');
        $nuevovuelos->hora_y_fecha_de_llegada = $request->get('hora_y_fecha_de_llegadaS');
        $nuevovuelos->Aerolineas_id = $id;
        $nuevovuelos->save();
        return redirect("/aerolineas/$id");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proyectovuelo=Vuelos::findOrFail($id);
        return view('vuelos.edit',['ConsultaV'=>$proyectovuelo]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nuevovueloA = Vuelos::findOrFail($id);
        $nuevovueloA->cuidad_de_Partida = $request->get('cuidad_de_PartidaA');
        $nuevovueloA->cuidad_de_destino = $request->get('cuidad_de_destinoA');
        $nuevovueloA->Numero_de_pasajeros= $request->get('Numero_de_pasajerosA');
        $nuevovueloA->novedad_del_vuelo= $request->get('novedad_del_vueloA');
        $nuevovueloA->hora_y_fecha_de_partida= $request->get('hora_y_fecha_de_partidaA');
        $nuevovueloA->hora_y_fecha_de_llegada= $request->get('hora_y_fecha_de_llegadaA');
        $nuevovueloA ->Aerolineas_id =$nuevovueloA->Aerolineas_id;
        $nuevovueloA->save();
      return redirect ("/aerolineas/$nuevovueloA->Aerolineas_id");
    }
 public function delete($id){
    $registrodelete=Vuelos::findOrFail($id);
    return view('vuelos.delete',['borrarvuelos'=>$registrodelete]);
   }
    /**
     * Remove the specified resource from storage.
     */ 
    public function destroy(string $id)
    {
        $borrarvuelo=Vuelos::findOrFail($id);
        $borrarvuelo->delete();
        return redirect("/aerolineas/$borrarvuelo->Aerolineas_id");
      }
    }

