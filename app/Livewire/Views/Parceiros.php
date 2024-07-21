<?php

namespace App\Livewire\Views;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Parceiros')]
class Parceiros extends Component
{
  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.parceiros');
  }
}
