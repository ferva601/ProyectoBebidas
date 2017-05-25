<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horeca;
use App\Models\Pais;
use App\Models\Provincia_Region;


class HorecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horecas = Horeca::paginate(1);
        return view('horeca.index')->with(compact('horecas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Pais::all();
        $provincias = Provincia_Region::all();

        return view('horeca.create')->with(compact('paises', 'provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horeca = new Horeca($request->all());
        $horeca->save();

        

        return redirect()->action('HorecaController@index');
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
        $paises = Pais::all();
        $provincias = Provincia_Region::all();

        $horeca = Horeca::find($id);

        return view('horeca.edit')->with(compact('horeca', 'paises', 'provincias'));
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
        $horeca = Horeca::find($id);
        $horeca->fill($request->all());
        $horeca->save();

        return redirect()->action('HorecaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horeca = Horeca::find($id);
        $horeca->delete();

        return redirect()->action('HorecaController@index');
    }
}
