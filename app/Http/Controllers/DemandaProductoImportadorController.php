<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demanda_Producto_Importador;
use App\Models\Producto;
use App\Models\Pais;
use App\Models\Provincia_Region;
use App\Models\Clase_Bedida;
use App\Models\Bebida;
use DB;

class DemandaProductoImportadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandasProductosImportadores = Demanda_Producto_Importador::paginate(1);
        return view('demandaProductoImportador.index')->with(compact('demandasProductosImportadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = DB::table('producto')
                        ->orderBy('nombre')
                        ->select('id', 'nombre')
                        ->get();

        $paises = DB::table('pais')
                        ->orderBy('pais')
                        ->select('id', 'pais')
                        ->get();

        $provincias = DB::table('provincia_region')
                        ->orderBy('provincia')
                        ->select('id', 'provincia')
                        ->get();

        return view('demandaProductoImportador.create')->with(compact('productos','paises','provincias'));
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
        $demandaProductoImportador  = Demanda_Producto_Importador::find($id);
        
        $productos = DB::table('producto')
                        ->orderBy('nombre')
                        ->select('id', 'nombre')
                        ->get();

        $paises = DB::table('pais')
                        ->orderBy('pais')
                        ->select('id', 'pais')
                        ->get();

        $provincias = DB::table('provincia_region')
                        ->orderBy('provincia')
                        ->select('id', 'provincia')
                        ->get();

        return view('demandaProductoImportador.edit')->with(compact('demandaProductoImportador','productos', 'paises', 'provincias')); 
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
