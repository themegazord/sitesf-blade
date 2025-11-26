<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

class FabricaPequenoPorte extends Component
{
  public $tags = [
    'Confecções',
    'Lingeries',
    'Roupas Infantis'
  ];

  #[Title("SF Sistemas - Soluções - Fabricas de Pequeno Porte")]
  public function render()
  {
    return view('livewire.views.solucoes.fabrica-pequeno-porte');
  }
}
