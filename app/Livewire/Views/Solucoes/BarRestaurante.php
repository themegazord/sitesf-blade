<?php

namespace App\Livewire\Views\Solucoes;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Solucao para bares e restaurantes')]
class BarRestaurante extends Component
{
    public function render()
    {
        return view('livewire.views.solucoes.bar-restaurante');
    }
}
