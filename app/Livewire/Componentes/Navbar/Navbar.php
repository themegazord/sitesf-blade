<?php

namespace App\Livewire\Componentes\Navbar;

use App\Configuracao\RotaAtual;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Navbar extends Component
{
  use RotaAtual;
  public bool $isRotaAlternativa = false;
  public string $isRotaAtiva = '';

  public function mount(): void {
    $this->isRotaAlternativa = $this->isRotaAlternativa();
    $this->isRotaAtiva = $this->isRotaAtiva();
  }

  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.componentes.navbar.navbar');
  }

  public function download(): StreamedResponse
  {
    // Obtém todos os arquivos no diretório /apk/atual/
    $files = Storage::disk('ftp')->files('/apk/atual/');

    // Verifica se há arquivos no diretório
    if (empty($files)) {
      abort(404, 'Nenhum arquivo encontrado no diretório /apk/atual/.');
    }

    // Pega o primeiro arquivo da lista
    $file = $files[0];

    // Força o tipo MIME correto
    return response()->streamDownload(function () use ($file) {
      echo Storage::get($file);
    }, 'safimobile.apk', [
      'Content-Type' => 'application/vnd.android.package-archive'
    ]);
  }
}
