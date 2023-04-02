<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aerolineas;
use Illuminate\Http\Request;

class AerolineasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyecto=Aerolineas::all();
        return view('aerolineas.index',['avionV'=>$proyecto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aerolineas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoaero = new Aerolineas();
        $nuevoaero->name = $request->get('name');
        $nuevoaero->Nit = $request->get('doc');
        $nuevoaero->save();
        return redirect('/aerolineas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nuevoShow= Aerolineas::findOrFail($id);
        // dd($nuevoShow);
        return view('aerolineas.show', ['aerov' =>$nuevoShow]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proyectovueloS=Aerolineas::findOrFail($id);
        return view('aerolineas.edit',['idConsultadoS'=>$proyectovueloS]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $modificaraero = Aerolineas::findOrFail($id);
        $modificaraero->name = $request->get('nameS');
        $modificaraero->Nit = $request->get('docS');
        $modificaraero->save();

        return redirect('/aerolineas');
    }

    public function delete($id){
        $aerolineaBorrar = Aerolineas::findOrFail($id);
        return view('aerolineas.delete',['deleteA' => $aerolineaBorrar]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aeroBorrar=Aerolineas::findOrFail($id);
        $aeroBorrar->delete();
      return redirect('/aerolineas');
    }
}
