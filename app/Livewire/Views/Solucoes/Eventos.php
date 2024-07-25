<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

class Eventos extends Component
{
  #[Title("SF Sistemas - Soluções - Eventos")]
  public function render()
  {
    return view('livewire.views.solucoes.eventos');
  }
}
