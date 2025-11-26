<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

class DistribuidoraConveniencia extends Component
{
  public $tags = [
    'Conveniências',
    'Mini-Mercado',
    'Armazém',
    'Distribuidora de Gás e Água'
  ];
  #[Title("SF Sistemas - Soluções - Distribuidora e Conveniencias")]
  public function render()
  {
    return view('livewire.views.solucoes.distribuidora-conveniencia');
  }
}
