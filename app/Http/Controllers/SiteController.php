<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

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
        return view('site.details', compact('produto'));
    }
}
