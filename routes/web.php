<?php

use App\Livewire\Views\Solucoes\BarRestaurante;
use Illuminate\Support\Facades\Route;

use App\Livewire\Views\Home;
use App\Livewire\Views\QuemSomos;
use App\Livewire\Views\Modulos;
use App\Livewire\Views\SerSol;
use App\Livewire\Views\Parceiros;
use App\Livewire\Views\Solucoes\SupermercadoMercearia;

Route::get('/', Home::class)->name('home');
Route::get('/modulos', Modulos::class)->name('modulos');
Route::get('/quemsomos', Quemsomos::class)->name('quemsomos');
Route::get('/parceiros', Parceiros::class)->name('parceiros');
Route::prefix('solucoes')->group(function () {
  Route::get('/', SerSol::class)->name('solucoes');
  Route::get('/barrestaurante', BarRestaurante::class)->name('barrestaurante');
  Route::get('/supermercadomercearia', SupermercadoMercearia::class)->name('supermerc');
});
