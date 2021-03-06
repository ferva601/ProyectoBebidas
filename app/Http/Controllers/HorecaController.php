<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horeca;
use App\Models\Pais;
use App\Models\Provincia_Region;
use App\Models\Telefono_Horeca;
use DB;
use Storage;
use Auth;


class HorecaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $paises = DB::table('pais')
                        ->orderBy('pais')
                        ->select('id', 'pais')
                        ->get();

        $provincias = DB::table('provincia_region')
                        ->orderBy('provincia')
                        ->select('id', 'provincia')
                        ->get();

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
        $file = $request->file('logo');
        $nombre = 'horeca_'.time().'.'.$file->getClientOriginalExtension();
        $path = public_path() . '/imagenes/horecas';
        $file->move($path, $nombre);

        $horeca = new Horeca($request->all());
        $horeca->logo = $nombre;
        $horeca->user_id = Auth::user()->id;
        $horeca->save();

         if ($request->who == 'U'){
             return redirect()->action('UsuarioController@index'); 
        }elseif ($request->who == 'H'){
            return redirect()->action('HorecaController@index');
        }

        /*$telefono = new Telefono_Horeca();
        $telefono->telefono = $request->telefono;
        $telefono->horeca()->associate($horeca);
        $telefono->save();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horeca = Horeca::find($id);
        
        return view('horeca.show')->with(compact('horeca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $paises = DB::table('pais')
                        ->orderBy('pais')
                        ->select('id', 'pais')
                        ->get();

        $provincias = DB::table('provincia_region')
                        ->orderBy('provincia')
                        ->select('id', 'provincia')
                        ->get();

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
