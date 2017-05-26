<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demanda_Producto_Distribuidor;
use App\Models\Producto;
use App\Models\Pais;
use App\Models\Provincia_Region;
use App\Models\Clase_Bedida;
use App\Models\Bebida;

class DemandaProductoDistribuidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demanda_producto_distribuidor = Demanda_Producto_Distribuidor::paginate(1);
        return view('demanda_producto_distribuidor.index')->with(compact('demanda_producto_distribuidor'));
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
        $clase_bedida = Clase_Bedida::all();
        $bedida = Bedida::all();
        return view('demanda_producto_distribuidor.create')->with(compact('bedida','clase_bedida','producto','paises','provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demanda_producto_distribuidor = new Demanda_Producto_Distribuidor($request->all());
        $demanda_producto_distribuidor->save();
        return redirect()->action('DemandaProductoDistribuidorController@index');
    }

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
        $demanda_producto_distribuidor = Demanda_Producto_Distribuidor::find($id);
        $producto = Producto::all();
        $paises = Pais::all();
        $provincias = Provincia_Region::all();
        $clase_bedida = Clase_Bedida::all();
        $bedida = Bedida::all();

        return view('demanda_producto_distribuidor.edit')->with(compact('demanda_producto_distribuidor','producto', 'paises', 'provincias','bedida','clase_bedida')); 
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
        $demanda_producto_distribuidor = Demanda_Producto_Distribuidor::find($id);
        $demanda_producto_distribuidor->fill($request->all());
        $demanda_producto_distribuidor->save();

        return redirect()->action('DemandaProductoDistribuidorController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demanda_producto_distribuidor = Demanda_Producto_Distribuidor::find($id);
        $demanda_producto_distribuidor->delete();

        return redirect()->action('DemandaProductoDistribuidorController@index');
    }
}
