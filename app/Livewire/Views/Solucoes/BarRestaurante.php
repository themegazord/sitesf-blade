<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Solucao para bares e restaurantes')]
class BarRestaurante extends Component
{
  public $tags = [
    'Bares',
    'Lanchonetes',
    'Pizzarias',
    'Marmitarias',
    'Soberias',
    'Restaurantes em Geral'
  ];

  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.solucoes.bar-restaurante');
  }
}
