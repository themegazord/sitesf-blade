<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

class Confeccoes extends Component
{
  #[Title("SF Sistemas - Soluções - Confecções")]
  public function render()
  {
    return view('livewire.views.solucoes.confeccoes');
  }
}
