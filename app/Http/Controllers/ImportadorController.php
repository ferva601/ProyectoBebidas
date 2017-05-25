<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Importador;
use App\Models\User;
use App\Models\Pais;
use App\Models\Provincia_Region;

class ImportadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $importadores = Importador::paginate(1);
        return view('importadores.index')->with(compact('importadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = User::all();
        $pais = Pais::all();
        $provincias = Provincia_Region::all();

        return view('usuario.create')->with(compact('usuario','paises','provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $importador = new Importador($request->all());
        $importador->save();
        return redirect()->action('ImportadorController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $importador = Importador::find($id);
        $usuario = User::all();
        $paises = Pais::all();
        $provincias = Provincia_Region::all();

       return view('importador.edit')->with(compact('importador','usuario', 'paises', 'provincias'));
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
        $importador = Importador::find($id);
        $importador->fill($request->all());
        $importador->save();

        return redirect()->action('ImportadorController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $importador = Importador::find($id);
        $importador->delete();

        return redirect()->action('ImportadorController@index');
    }
}
