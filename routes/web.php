<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Views\Home::class)->name('home');
