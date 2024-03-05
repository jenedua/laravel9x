<?php

use App\Http\Controllers\ProdutoController;
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