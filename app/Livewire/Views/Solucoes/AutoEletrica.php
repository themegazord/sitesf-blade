<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;

use Livewire\Component;

#[Title('SF Sistemas - Solucoes - Auto Elétrica e Oficinas')]
class AutoEletrica extends Component
{
  public $tags = [
    'Oficinas',
    'Auto Elétricas',
    'Garagem',
    'Martelinho de Ouro',
    'Estúdio'
  ];
  public function render()
  {
    return view('livewire.views.solucoes.auto-eletrica');
  }
}
