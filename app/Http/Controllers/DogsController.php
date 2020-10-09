<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;

class DogsController extends Controller
{
    function feed(Request $request){
        // Capturar o id enviado
        $id = $request->id;

        // Carregar o doguinho do id enviado
        $dog = Dog::find($id);

        // Retornar um erro caso o doguinho não exista (404)
        if(is_null($dog)){
            return response()->json('{"msg":"Dog não encontrado"}',404);
        }

        // Enviar um json com os dogguinhos do sexo oposto
        return response()->json($dog->oppositeSex(),200);
    }

    function matches(Request $request){
        // Capturar o id do dog
        $id = $request->id;

        // Carregar os matches
        $dogs = Dog::join('likes','dogs.id','=','likes.liker_id')->select('*')->get();

        dd($dogs);


        // retornar os matches
    }

    
}
