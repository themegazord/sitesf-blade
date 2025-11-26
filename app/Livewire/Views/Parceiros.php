<?php

namespace App\Livewire\Views;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Parceiros')]
class Parceiros extends Component
{
  public $parceiros = [
    ['nome' => 'Deck Café Bar', 'logo' => 'https://sitesf.br-se1.magaluobjects.com/DeckCafeBar.png'],
    ['nome' => 'HeT', 'logo' => 'https://sitesf.br-se1.magaluobjects.com/HeT.png'],
    ['nome' => 'Lagoa', 'logo' => 'https://sitesf.br-se1.magaluobjects.com/Lagoa.png'],
    ['nome' => 'Mafisa', 'logo' => 'https://sitesf.br-se1.magaluobjects.com/Mafisa.png'],
    ['nome' => 'Obrativa', 'logo' => 'https://sitesf.br-se1.magaluobjects.com/Obrativa.png'],
    ['nome' => 'Pax Nacional', 'logo' => 'https://sitesf.br-se1.magaluobjects.com/PaxNacional.png'],
    ['nome' => 'Santo Antonio', 'logo' => 'https://sitesf.br-se1.magaluobjects.com/StAntonio.png'],
  ];
  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.parceiros');
  }
}
