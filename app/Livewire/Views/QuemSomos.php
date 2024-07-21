<?php

namespace App\Livewire\Views;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Quem somos')]
class QuemSomos extends Component
{
  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.quem-somos');
  }
}
