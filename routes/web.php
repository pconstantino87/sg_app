<?php

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

/*Route::get('/', function () {
    return "Seja bem vindo";
});*/
Route::get("/", [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'SobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', [\App\Http\Controllers\LoginController::class,'login'])->name('site.login');

/*
prefixo de rota mais agrupamento
*/
Route::prefix('/app')->group(function(){
    Route::get('/clientes', [\App\Http\Controllers\ClientesController::class,'clientes']);
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedoresController::class, 'index']);
    Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'produtos']);    
});

Route::get('rota1',function(){
    echo 'Rota 1';
})->name('site.rota1');

//redirect na rota atraves da função de callback
Route::get('rota2',function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

/*usado para criar 404 customizado*/
Route::fallback(function(){
    echo 'Essa página não existe <a href="'. route('site.index') .'">clique aqui para voltar para home</a>';
});

//redirect direto na route
//Route::redirect('/rota2', '/rota1', 301);

//Enviando parametro para o controler
Route::get('/teste/{p1}/{p2?}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('site.teste');