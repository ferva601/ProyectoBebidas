<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreditoCreateRequest;
use App\Http\Requests\CreditoUpdateRequest;
use App\Models\Credito;

class CreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditos=Credito::paginate(1);
        return view ('credito.index')->with (compact('creditos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('credito.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreditoCreateRequest $request)
    {
        $credito=new Credito($request->all());
        $credito->save();
        return redirect()->action('CreditoController@index');
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
        $credito = Credito::find($id);

        return view('credito.edit')->with(compact('credito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreditoUpdateRequest $request, $id)
    {
         $credito = Credito::find($id);
        $credito->fill($request->all());
        $credito->save();

        return redirect()->action('CreditoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $credito = Credito::find($id);
        $credito->delete();

        return redirect()->action('CreditoController@index');
    }
}
