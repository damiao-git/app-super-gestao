<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');
Route::get('/contato/{nome}/{categoria}', function (string $nome, string $categoria = 'sem categoria') {
    echo 'Estamos aqui ' . $nome . ' ' . $categoria;
})->where('nome', '[A-Za-z]+')->where('categoria', '[A-Za-z]+');

Route::get('/login', function () {
    return 'Login';
});

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('app.formecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

Route::fallback(function () {
    echo 'A rota acessada não existe, <a href="'.route('site.principal').'">Principal</a> para ir patra a página principal';
});


