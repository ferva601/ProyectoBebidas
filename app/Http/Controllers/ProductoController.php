<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pais;
use App\Models\Provincia_Region;
use App\Models\Clase_Bebida;
use App\Models\Marca;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::paginate(1);
        return view('producto.index')->with(compact('productos'));
    }

    public function create()
    {
        $paises = Pais::all();
        $provincias = Provincia_Region::all();
        $bebidas = Clase_Bebida::all();
        $marcas = Marca::all();

        return view('producto.create')->with(compact('paises','provincias', 'bebidas', 'marcas'));
    }

    public function store(Request $request)
    {
        $producto = new Producto($request->all());
        $producto->save();
        return redirect()->action('ProductoController@index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $producto = Producto::find($id);

        $paises = Pais::all();
        $provincias = Provincia_Region::all();
        $bebidas = Clase_Bebida::all();
        $marcas = Marca::all();

        return view('producto.edit')->with(compact('producto', 'paises', 'provincias', 'bebidas', 'marcas'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->fill($request->all());
        $producto->save();

        return redirect()->action('ProductoController@index');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect()->action('ProductoController@index');
    }
}
