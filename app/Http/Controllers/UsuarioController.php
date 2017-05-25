<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pais;
use App\Models\Provincia_Region;
use App\Models\Productor;
use App\Models\Importador;
use App\Models\Distribuidor;
use App\Models\Horeca;

class UsuarioController extends Controller
{

    public function index()
    {

        $usuarios = User::paginate(1);
        return view('usuario.index')->with(compact('usuarios'));

    }

    public function create()
    {   
        /*
        $productor = Productor::all();
        $importador = Importador::all();
        $distribuidor = Distribuidor::all();
        $horecas = Horeca::all();
        */
       
       $paises = Pais::all();
       $provincias = Provincia_Region::all();

        return view('usuario.create')->with(compact('paises', 'provincias'));//->with(compact('productor', 'importador', 'distribuidor', 'horecas'));
    }

    public function store(Request $request)
    {
        $usuario = new User($request->all());
        $usuario->save();
        return redirect()->action('UsuarioController@index');
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
        /*
        $usuario = User::find($id);
        $productor = Productor::all();
        $importador = Importador::all();
        $distribuidor = Distribuidor::all();
        $horecas = Horeca::all();

        return view('Usuario.create')->with(compact('productor','importador', 'distribuidor', 'horecas'));
        */
       
       $usuario = User::find($id);
       $paises = Pais::all();
       $provincias = Provincia_Region::all();

       return view('usuario.edit')->with(compact('usuario', 'paises', 'provincias'));
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
        
        $usuario = User::find($id);
        $usuario->fill($request->all());
        $usuario->save();

        return redirect()->action('UsuarioController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect()->action('UsuarioController@index');

    }
}
