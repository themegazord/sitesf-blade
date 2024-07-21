<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Views\QuemSomos;

Route::get('/', \App\Livewire\Views\Home::class)->name('home');
Route::get('/quemsomos', Quemsomos::class)->name('quemsomos');
