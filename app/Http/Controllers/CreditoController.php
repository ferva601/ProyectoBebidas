<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreditoCreateRequest;
use App\Http\Requests\CreditoUpdateRequest;
use App\Models\Credito;
use App\Models\Productor;
use App\Models\Distribuidor;
use App\Models\ Importador;
use App\Models\User;
use DB;

class CreditoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $creditos=Credito::paginate(10);
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
       $credito = Credito::all();
        return view ('credito.show')->with(compact('credito'));
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

    public function compra()
    {   
        $idusuario = Auth::id(); 
            $productores = Productor::orderBy('nombre')
                        ->select('id', 'nombre', 'telefono', 'email', 'saldo', 'logo', 'pais_id')
                        ->where('user_id', $idusuario)
                        ->paginate(10);
            $distribuidores = Distribuidor::orderBy('nombre')
                        ->select('id', 'nombre', 'telefono', 'email', 'saldo', 'logo', 'pais_id')
                        ->where('user_id', $idusuario)
                        ->paginate(10);
            $importadores = Importador::orderBy('nombre')
                        ->select('id', 'nombre', 'telefono', 'email', 'saldo', 'logo', 'pais_id')
                        ->where('user_id', $idusuario)
                        ->paginate(10);

        //dd($importadores);
        
        return view('credito.lista', compact('productores','distribuidores','importadores'));
        //$lista = array($productores, $distribuidores, $importador);
        //dd($lista)
    }

    public function pago($id)
    {   

        if ($id_entidad == Productor::find($id)) {
            $saldo = Productor::select('saldo');

        } elseif ($id_entidad == Distribuidor::find($id)) {
            $saldo = Distribuidor::select('saldo');

        } elseif ($id_entidad == Importador::find($id)) {
            $saldo = Importador::select('saldo');
        }

        $compra_saldo = $saldo;
        return  view('credito.pago', compact('saldo'));

    }


}

