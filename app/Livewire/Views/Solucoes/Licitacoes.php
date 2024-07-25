<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

class Licitacoes extends Component
{
  #[Title("SF Sistemas - Soluções - Licitações")]
  public function render()
  {
    return view('livewire.views.solucoes.licitacoes');
  }
}
