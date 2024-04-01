<?php

use App\Http\Controllers\CarinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('produtos', ProdutoController::class);

Route::get('/',[SiteController::class,'index'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get('/carinho', [CarinhoController::class, 'carinhoLista'])->name('site.carinho');
Route::post('/carinho', [CarinhoController::class, 'adicionarCarinho'])->name('site.addcarinho');
Route::post('/remover', [CarinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');
Route::post('/atualizar', [CarinhoController::class, 'atualizaCarrinho'])->name('site.atualizacarrinho');
Route::get('/limpar', [CarinhoController::class, 'limpaCarrinho'])->name('site.limpacarrinho');

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class,'auth'])->name('login.auth');
// Route::get('/', function () {
//     return redirect()->route('admin.clientes');
// });

// Route::group([
//     'prefix' => 'admin',
//     'as' => 'admin.'

// ], function(){

//     Route::get('dashboard', function(){
//         return "dashboard";
//     })->name('dashboard');

//     Route::get('users', function(){
//         return "users" ;
//     })->name('users');

//     Route::get('clientes', function(){
//         return "clientes" ;
//     })->name('clientes');

// });

// Route::get('/empresa', function(){
//     return view('site.empresa');
// });
// Route::any('/any', function(){
//     return 'todos os tipo de verbos http (GET, POST, PUT , PACHT ...)';
// });
// Route::match(['put', 'delete'],'/match', function(){
//     return 'Permite apenas acessos definidos' ;
// });

// Route::get('/produto/{id}/{cat?}', function($id, $cat= ''){
//     return 'O id do produto é: ' .$id.'<br>'.'e a categoria é: ' .$cat  ;
// }) ;
