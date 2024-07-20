<?php

namespace App\Livewire\Componentes\Footer;

use Livewire\Attributes\On;
use Livewire\Component;

class Footer extends Component
{
  public bool $isMobile = false;

  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.componentes.footer.footer');
  }

  #[On('mobile')]
  public function setMobile(): void {
    $this->isMobile = !$this->isMobile;
  }
}
