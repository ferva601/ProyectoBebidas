<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;
use App\Models\User;
use App\Models\Producto;


class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opinion = Opinion::paginate(1);
        return view('opinion.index')->with(compact('opinion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $Producto = Producto::all();

        return view('opinion.create')->with(compact('user','Producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opinion = new Opinion($request->all());
        $opinion->save();
        return redirect()->action('OpinionController@index');
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
       
        $opinion = Opinion::find($id);
        $user = User::all();
        $Producto = Producto::all();

        return view('opinion.edit')->with(compact('opinion', 'user', 'Producto'));
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
        
        $opinion = Opinion::find($id);
        $opinion->fill($request->all());
        $opinion->save();

        return redirect()->action('OpinionController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opinion = Opinion::find($id);
        $opinion->delete();

        return redirect()->action('OpinionController@index');

    }
}
