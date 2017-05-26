<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Productor;
use App\Models\Importador;
use App\Models\Distribuidor;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner=Banner::paginate(1);
        return view ('banner.index')->with (compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productor = Productor::all();
        $importador = Importador::all();
        $distribuidor = Distribuidor::all();

        return view('banner.create')->with(compact('productor','importador','distribuidor'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner($request->all());
        $banner->save();
        return redirect()->action('BannerController@index');
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
        $banner = Banner::find($id);
        $productor = Productor::all();
        $importador = Importador::all();
        $distribuidor = Distribuidor::all();

       return view('banner.edit')->with(compact('banner', 'paises', 'provincias'));
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
        $banner = Banner::find($id);
        $banner->fill($request->all());
        $banner->save();

        return redirect()->action('BannerController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();

        return redirect()->action('BannerController@index');
    }
}
