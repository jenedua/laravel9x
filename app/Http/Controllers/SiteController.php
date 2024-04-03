<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Gate;

class SiteController extends Controller
{
    public function index()
    {
        //return "index produtos";
       
        //return dd($produtos);
        // $nome = 'Fedner';
        // $idade = 39;
        // $html = "Olá bem-vindo";
        // return view('site.empresa', [
        //     'nome' => $nome,
        //     'idade' => $idade,
        //     'html' => $html
        // ]);
        //return view('site.home',compact('nome', 'idade', 'html'));
        $produtos = Produto::paginate(3);
        return view('site.home', compact('produtos'));
    }

    public function details($slug){
        $produto = Produto::where('slug', $slug)->first();

        //Gate::authorize('ver-produto', $produto);
        //$this->authorize('verProduto', $produto);
        // if(Gate::allows('ver-produto', $produto)){

        //     return view('site.details', compact('produto'));
        // }
        // if(Gate::denies('ver-produto', $produto)){
        //     return redirect()->route('site.index');
        // }
        return view('site.details', compact('produto'));


    }
    public function categoria($id){
        $categoria = Categoria::find($id);
        $produtos = Produto::where('id_categoria', $id)->paginate(3);
        return view('site.categoria', compact('produtos', 'categoria'));
    }
}
