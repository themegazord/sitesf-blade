<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

class DistribuidoraConveniencia extends Component
{
  #[Title("SF Sistemas - Soluções - Distribuidora e Conveniencias")]
  public function render()
  {
    return view('livewire.views.solucoes.distribuidora-conveniencia');
  }
}
