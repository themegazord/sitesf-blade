<?php

namespace App\Livewire\Views;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Parceiros')]
class Parceiros extends Component
{
  public $parceiros = [
    ['nome' => 'Deck Café Bar', 'logo' => 'imagens/Parceiros/DeckCafeBar.png'],
    ['nome' => 'HeT', 'logo' => 'imagens/Parceiros/HeT.png'],
    ['nome' => 'Lagoa', 'logo' => 'imagens/Parceiros/Lagoa.png'],
    ['nome' => 'Mafisa', 'logo' => 'imagens/Parceiros/Mafisa.png'],
    ['nome' => 'Obrativa', 'logo' => 'imagens/Parceiros/Obrativa.png'],
    ['nome' => 'Pax Nacional', 'logo' => 'imagens/Parceiros/PaxNacional.png'],
    ['nome' => 'Santo Antonio', 'logo' => 'imagens/Parceiros/StAntonio.png'],
  ];
  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.parceiros');
  }
}
