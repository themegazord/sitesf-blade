<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Solucoes - Supermercado e Mercearias')]
class SupermercadoMercearia extends Component
{
  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.solucoes.supermercado-mercearia');
  }
}
