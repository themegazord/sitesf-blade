<?php

use App\Http\Controllers\ControleObito;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
  Route::prefix('ControleObito')->group(function () {
    Route::post('envia', [ControleObito::class, 'store'])->name('api.v1.controle_obito.store');
    Route::get('/{nome_arquivo}', [ControleObito::class, 'show'])->name('api.v1.controle_obito.show');
  });
});