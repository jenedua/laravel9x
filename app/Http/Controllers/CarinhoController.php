<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarinhoController extends Controller
{
    public function carinhoLista(){
        $itens = \Cart::getContent();
       return view('site.carinho', compact('itens'));

    }

    public function adicionarCarinho(Request $request){
        //dd($request->all());

        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'attributes' => array(
                'image' =>$request->img
            )
            ]);

    }
}
