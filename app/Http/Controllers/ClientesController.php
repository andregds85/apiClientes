<?php

namespace App\Http\Controllers;
use App\Models\Clientes as Clientes;
use App\Http\Resources\Clientes as ClientesResource;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
        $clientes = Clientes::paginate(15);
        return ClientesResource::collection($clientes);
    }


    public function store(Request $request){
        $clientes = new Clientes;
        $clientes->nome = $request->input('nome');
        $clientes->telefone = $request->input('telefone');
        $clientes->email = $request->input('email');
          if( $clientes->save() ){
          return new ClientesResource($clientes );
        }
      }

      
    public function show($id)
    {
        $clientes = Clientes::findOrFail( $id );
        return new ClientesResource( $clientes );
    }

    public function update(Request $request){
        $clientes = Clientes::findOrFail( $request->id );
        $clientes->nome = $request->input('nome');
        $clientes->telefone = $request->input('telefone');
        $clientes->email = $request->input('email');

    
        if( $clientes->save() ){
          return new ClientesResource($clientes);
        }
      } 
  
      public function destroy($id){
        $clientes = Clientes::findOrFail( $id );
        if($clientes->delete()){
          return new ClientesResource($clientes);
        }
    
      }
    }
    