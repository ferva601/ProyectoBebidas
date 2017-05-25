<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demanda_Producto_Importador;
use App\Models\Producto;
use App\Models\Pais;
use App\Models\Provincia_Region;
use App\Models\Clase_Bedida;
use App\Models\Bebida;

class DemandaProductoImportadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demanda_producto_Importador = Demanda_Producto_Importador::paginate(1);
        return view('demanda_producto_Importador.index')->with(compact('demanda_producto_Importador '));
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
        return view('demanda_producto_Importador .create')->with(compact('bedida','clase_bedida','producto','paises','provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demanda_producto_Importador  = new Demanda_Producto_Importador($request->all());
        $demanda_producto_Importador ->save();
        return redirect()->action('DemandaProductoImportadorController@index');
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
        $demanda_producto_Importador  = Demanda_Producto_Importador::find($id);
        $producto = Producto::all();
        $paises = Pais::all();
        $provincias = Provincia_Region::all();
        $clase_bedida = Clase_Bedida::all();
        $bedida = Bedida::all();

        return view('demanda_producto_Importador .edit')->with(compact('demanda_producto_Importador ','producto', 'paises', 'provincias','bedida','clase_bedida')); 
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
        $demanda_producto_Importador  = Demanda_Producto_Importador::find($id);
        $demanda_producto_Importador ->fill($request->all());
        $demanda_producto_Importador ->save();

        return redirect()->action('DemandaProductoImportadorController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demanda_producto_Importador  = Demanda_Producto_Importador::find($id);
        $demanda_producto_Importador ->delete();

        return redirect()->action('DemandaProductoImportadorController@index');
    }
}
