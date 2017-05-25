<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productor;
use App\Models\Pais;
use App\Models\Telefono_Productor;
use DB;


class ProductorController extends Controller
{
    public function index()
    {
        $productores = Productor::paginate(1);
        return view('productor.index')->with(compact('productores'));
    }

    public function create()
    {
        $paises = DB::table('pais')
                        ->orderBy('pais')
                        ->select('id', 'pais')
                        ->get();

        $provincias = DB::table('provincia_region')
                        ->orderBy('provincia')
                        ->select('id', 'provincia')
                        ->get();

        return view('productor.create')->with(compact('paises', 'provincias'));
    }

    public function store(Request $request)
    {
        $productor = new Productor($request->all());
        $productor->save();

        return redirect()->action('ProductorController@index');  
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $productor = Productor::find($id);
       
        $paises = DB::table('pais')
                        ->orderBy('pais')
                        ->select('id', 'pais')
                        ->get();

        $provincias = DB::table('provincia_region')
                        ->orderBy('provincia')
                        ->select('id', 'provincia')
                        ->get();

        $telefonos = DB::table('telefono_productor')
                        ->OrderBY('id')
                        ->select('id', 'telefono')
                        ->get();

       return view('productor.edit')->with(compact('productor','paises', 'provincias', 'telefonos'));
    }

    public function update(Request $request, $id)
    {
        $productor = Productor::find($id);
        $productor->fill($request->all());
        $productor->save();
        
        return redirect()->action('ProductorController@index');
    }

    public function destroy($id)
    {
        $productor = Productor::find($id);
        $productor->delete();

        return redirect()->action('ProductorController@index');
    }
}
