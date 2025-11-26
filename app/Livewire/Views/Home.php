<?php

namespace App\Livewire\Views;

use App\Configuracao\RotaAtual;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Home')]
class Home extends Component
{
  public $isMenuOpen = false;

  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.home');
  }
}
