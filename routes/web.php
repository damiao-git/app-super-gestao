<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
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
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.formecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

Route::fallback(function () {
    echo 'A rota acessada não existe, <a href="'.route('site.principal').'">Principal</a> para ir patra a página principal';
});


