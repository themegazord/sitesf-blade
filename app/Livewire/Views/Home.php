<?php

namespace App\Livewire\Views;

use App\Configuracao\RotaAtual;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{
  use RotaAtual;
  public bool $isRotaAlternativa = false;

  public function mount(): void {
    $this->isRotaAlternativa = $this->isRotaAlternativa();
  }

  public bool $isMobile = false;
  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.home');
  }
  #[On('mobile')]
  public function setMobile(): void {
    $this->isMobile = !$this->isMobile;
  }
}
