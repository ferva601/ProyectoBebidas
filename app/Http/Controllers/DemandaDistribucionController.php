<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demanda_Distribuidor;
use App\Models\Producto;
use App\Models\Pais;
use App\Models\Provincia_Region;

class DemandaDistribucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demanda_distribuidor = Demanda_Distribuidor::paginate(1);
        return view('demanda_distribuidor.index')->with(compact('demanda_distribuidor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = Producto::all();
        $paises = Pais::all();
        $provincias = Provincia_Region::all();

        return view('demanda_distribuidor.create')->with(compact('producto','paises','provincias')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demanda_distribuidor  = new Demanda_Distribuidor($request->all());
        $demanda_distribuidor ->save();
        return redirect()->action('DemandaDistribucionController@index');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demanda_distribuidor = Demanda_Distribuidor::find($id);
        $producto = Producto::all();
        $paises = Pais::all();
        $provincias = Provincia_Region::all();

        return view('demanda_distribuidor.edit')->with(compact('demanda_distribuidor','producto', 'paises', 'provincias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $demanda_distribuidor = Demanda_Distribuidor::find($id);
        $demanda_distribuidor->fill($request->all());
        $demanda_distribuidor->save();

        return redirect()->action('DemandaDistribucionController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demanda_distribuidor  = Demanda_Distribuidor::find($id);
        $demanda_distribuidor ->delete();

        return redirect()->action('DemandaDistribucionController@index');
    }
}
