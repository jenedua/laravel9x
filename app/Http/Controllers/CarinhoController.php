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
            'quantity' => abs($request->qnt),
            'attributes' => array(
                'image' =>$request->img
            )
            ]);

            return redirect()->route('site.carinho')->with('sucesso', 'Produto adicionado com sucesso!');

    }

    public function removeCarrinho(Request $request){

        \Cart::remove($request->id);

        return redirect()->route('site.carinho')->with('sucesso', 'Produto removido do carrinho com sucesso!');

    }

    public function atualizaCarrinho(Request $request){
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => abs($request->quantity),
            ]
            ]);

            return redirect()->route('site.carinho')->with('sucesso', 'Produto atualizado do carrinho com sucesso!');
    }

    public function limpaCarrinho(){
        \Cart::clear();

        return redirect()->route('site.carinho')->with('aviso', 'Seu carrinho está vazio!');
    }



}
