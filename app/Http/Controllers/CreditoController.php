<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreditoCreateRequest;
use App\Http\Requests\CreditoUpdateRequest;
use App\Models\Credito;
use DB;

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

    public function store(CreditoCreateRequest $request)
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

    public function update(CreditoUpdateRequest $request, $id)
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

