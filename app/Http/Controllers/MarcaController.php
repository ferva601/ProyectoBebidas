<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Pais;
use App\Models\Provincia_Region;
use App\Models\Productor;

class MarcaController extends Controller
{
    public function index()
    {
        $listas=Marca::paginate(1);
        return view ('marca.index')->with (compact('listas'));
    }

    public function create()
    {
        //
         $paises=Pais::all();
         $provincias=Provincia_Region::all();
         $productores=Productor::all();

        return view ('marca.create')->with (compact('paises','provincias','productores'));
    }

    public function store(Request $request)
    {
        $marca=new Marca($request->all());
        $marca->save();
        return redirect()->action('MarcaController@index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $marca = Marca::find($id);
       $productores = Productor::all();
        $paises = Pais::all();
        $provincias = Provincia_Region::all();

        return view('marca.edit')->with(compact('productores', 'paises', 'provincias', 'marca'));
    }

    public function update(Request $request, $id)
    {
         $marca = Marca::find($id);
        $marca->fill($request->all());
        $marca->save();

        return redirect()->action('MarcaController@index');
    }

    public function destroy($id)
    {
       $marca = Marca::find($id);
        $marca->delete();

        return redirect()->action('MarcaController@index');
    }
}
