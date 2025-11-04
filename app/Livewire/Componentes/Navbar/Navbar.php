<?php

namespace App\Livewire\Componentes\Navbar;

use App\Configuracao\RotaAtual;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Navbar extends Component
{
  use RotaAtual;
  public bool $isRotaAlternativa, $navbarPreta = false;
  public string $isRotaAtiva = '';

  public function mount(): void
  {
    $this->isRotaAlternativa = $this->isRotaAlternativa();
    $this->navbarPreta = $this->navbarPreta();
    $this->isRotaAtiva = $this->isRotaAtiva();
  }

  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.componentes.navbar.navbar');
  }

  public function download(string $alvo): StreamedResponse
  {
    if ($alvo === 'apk') {
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
        echo Storage::disk('ftp')->get($file);
      }, 'safimobile.apk', [
        'Content-Type' => 'application/vnd.android.package-archive'
      ]);
    }

    if ($alvo === 'api') {
      try {
        // Obtém todos os arquivos no diretório /api/atual/
        $files = Storage::disk('ftp')->files('/api/atual/');

        // Verifica se há arquivos no diretório
        if (empty($files)) {
          abort(404, 'Nenhum arquivo encontrado no diretório /api/atual/.');
        }

        // Pega o primeiro arquivo da lista
        $file = $files[0];

        // Extrai o nome do arquivo original
        $fileName = basename($file);

        // Verifica se o arquivo existe
        if (!Storage::disk('ftp')->exists($file)) {
          abort(404, 'Arquivo não encontrado no FTP.');
        }

        // Determina o Content-Type correto baseado na extensão
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $contentType = match (strtolower($extension)) {
          'jar' => 'application/java-archive',
          'apk' => 'application/vnd.android.package-archive',
          'zip' => 'application/zip',
          default => 'application/octet-stream'
        };

        // Força o download com tipo MIME correto
        return response()->streamDownload(function () use ($file) {
          echo Storage::disk('ftp')->get($file);
        }, $fileName, [
          'Content-Type' => $contentType,
          'Content-Disposition' => 'attachment; filename="' . $fileName . '"'
        ]);
      } catch (\Exception $e) {
        Log::error('Erro ao baixar arquivo da API: ' . $e->getMessage());
        abort(500, 'Erro ao processar download do arquivo.');
      }
    }
  }
}
