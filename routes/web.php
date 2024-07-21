<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Views\Home;
use App\Livewire\Views\QuemSomos;
use App\Livewire\Views\Modulos;
use App\Livewire\Views\SerSol;
use App\Livewire\Views\Parceiros;

Route::get('/', Home::class)->name('home');
Route::get('/modulos', Modulos::class)->name('modulos');
Route::get('/quemsomos', Quemsomos::class)->name('quemsomos');
Route::get('/solucoes', SerSol::class)->name('solucoes');
Route::get('/parceiros', Parceiros::class)->name('parceiros');
