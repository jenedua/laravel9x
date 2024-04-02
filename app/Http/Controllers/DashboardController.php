<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    public function index(){
        $usuarios = User::all()->count();
        //grafico 1 - usuarios

        $userData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('ano')
        ->orderBy('ano','asc')
        ->get();
        //preparar arrays

        foreach($userData as $user){
            $ano[] = $user->ano;
            $total[] = $user->total;
        }
        //formatar para chartjs
        //$userLabel ="'Comparativo de cadastros de usuarios'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);
        //dd($userData);

        //grafico 2 - categories
       // $catData = Categoria::all();
        $catData = Categoria::with('produtos')->get();

        //preparar array
        foreach($catData as $cat){
            $catNome[] = "'". $cat->nome ."'";
            //$catNome[] =  $cat->nome;
            $catTotal[]= $cat->produtos->count();
            //$catTotal[]= Produto::where('id_categoria', $cat->id)->count();
        }
         // formatar para chartjs
         $catLabel = implode(',', $catNome);
         $catTotal = implode(',', $catTotal);
        return view('admin.dashboard', compact('usuarios', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }
}
