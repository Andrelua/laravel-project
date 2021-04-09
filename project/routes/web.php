<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function () { return "Login!";})->name('site.login');

// Agrupando rotas.

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function () { return "Clientes!";})->name('app.clientes');
    Route::get('/fornecedores', function () { return "Fornecedores!";})->name('app.fornecedores');
    Route::get('/produtos', function () { return "Produtos!";})->name('app.produtos');
});

// Redirecionamento de rotas.
// Ex: Login.

Route::get('/rota1', function () { 
    echo "Rota 1!";
})->name('site.rota1');

Route::get('/rota2', function () { 
    return redirect()->route('site.rota1');
})->name('site.rota2');

// Route::redirect('/rota2', '/rota1');

// Fallback

Route::fallback(function (){
    echo 'A rota acessada não existe. Clique <a href="/">aqui</a>';
});