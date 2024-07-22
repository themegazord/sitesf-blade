<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Solucoes - Roupas e Calcados')]
class RoupaCalcado extends Component
{
  public function render()
  {
    return view('livewire.views.solucoes.roupa-calcado');
  }
}
