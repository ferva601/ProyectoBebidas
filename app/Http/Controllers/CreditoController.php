<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credito;

class CreditoController extends Controller
{

    public function index()
    {
        $creditos=Credito::paginate(1);
        return view ('credito.index')->with (compact('creditos'));
    }

    public function create()
    {
      return view ('credito.create');
    }

    public function store(Request $request)
    {
        $credito=new Credito($request->all());
        $credito->save();
        return redirect()->action('CreditoController@index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $credito = Credito::find($id);

        return view('credito.edit')->with(compact('credito'));
    }

    public function update(Request $request, $id)
    {
         $credito = Credito::find($id);
        $credito->fill($request->all());
        $credito->save();

        return redirect()->action('CreditoController@index');
    }
    
    public function destroy($id)
    {
         $credito = Credito::find($id);
        $credito->delete();

        return redirect()->action('CreditoController@index');
    }
}
