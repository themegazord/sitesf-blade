<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Views\Home::class)->name('home');
Route::get('/quemsomos', \App\Livewire\Views\Quemsomos::class)->name('quemsomos');
