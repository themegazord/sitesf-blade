<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Views\Home;
use App\Livewire\Views\QuemSomos;
use App\Livewire\Views\Modulos;
use App\Livewire\Views\SerSol;
use App\Livewire\Views\Parceiros;
use App\Livewire\Views\Solucoes\BarRestaurante;
use App\Livewire\Views\Solucoes\SupermercadoMercearia;
use App\Livewire\Views\Solucoes\RoupaCalcado;
use App\Livewire\Views\Solucoes\AutoEletrica;
use App\Livewire\Views\Solucoes\DistribuidoraConveniencia;
use App\Livewire\Views\Solucoes\FabricaPequenoPorte;
use App\Livewire\Views\Solucoes\Confeccoes;

Route::get('/', Home::class)->name('home');
Route::get('/modulos', Modulos::class)->name('modulos');
Route::get('/quemsomos', Quemsomos::class)->name('quemsomos');
Route::get('/parceiros', Parceiros::class)->name('parceiros');
Route::prefix('solucoes')->group(function () {
  Route::get('/', SerSol::class)->name('solucoes');
  Route::get('/barrestaurante', BarRestaurante::class)->name('barrestaurante');
  Route::get('/supermercadomercearia', SupermercadoMercearia::class)->name('supermerc');
  Route::get('/roupacalcado', RoupaCalcado::class)->name('roupacalcado');
  Route::get('/autoelecoficina', AutoEletrica::class)->name('autoelecoficina');
  Route::get('/discconv', DistribuidoraConveniencia::class)->name('discconv');
  Route::get('/fabpeqporte', FabricaPequenoPorte::class)->name('fabpeqporte');
  Route::get('/confeccoes', Confeccoes::class)->name('confeccoes');
});
