<?php

namespace App\Livewire\Views;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Servicos e solucoes')]
class SerSol extends Component
{
   public $servicos = [
        [
            'nome' => 'Bares e Restaurantes',
            'route' => 'barrestaurante'
        ],
        [
            'nome' => 'Supermercados e Mercearias',
            'route' => 'supermerc'
        ],
        [
            'nome' => 'Lojas de Roupas e Calçados',
            'route' => 'roupacalcado'
        ],
        [
            'nome' => 'Auto Elétricas e Oficinas',
            'route' => 'autoelecoficina'
        ],
        [
            'nome' => 'Distribuidoras e Conveniências',
            'route' => 'discconv'
        ],
        [
            'nome' => 'Fábricas de Pequeno Porte',
            'route' => 'fabpeqporte'
        ],
        [
            'nome' => 'Confecções',
            'route' => 'confeccoes'
        ],
        [
            'nome' => 'Eventos',
            'route' => 'eventos'
        ],
        [
            'nome' => 'Licitações',
            'route' => 'licitacoes'
        ],
    ];
  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.ser-sol');
  }
}
