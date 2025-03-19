<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ControleObito extends Controller
{
  public function store(Request $request): JsonResponse
  {
    // Obtém o arquivo do request
    $arquivo = $request->file('arquivo');

    // Define um nome único para o arquivo
    $nomeArquivo = $arquivo->getClientOriginalName();

    // Salva o arquivo no diretório 'uploads' dentro do storage
    $caminho = $arquivo->storeAs('pharma', $nomeArquivo, 'local');

    return response()->json(['message' => 'JSON salvo com sucesso', 'file' => $nomeArquivo]);
  }

  public function show(string $nome_arquivo): StreamedResponse|JsonResponse
  {
    $caminho = "pharma/{$nome_arquivo}.json";

    // Verifica se o arquivo existe
    if (!Storage::exists($caminho)) {
      return response()->json(['error' => 'Arquivo não encontrado'], 404);
    }

    // Retorna um Stream de resposta para evitar carregamento em memória
    return response()->stream(function () use ($caminho) {
      $handle = Storage::readStream($caminho);
      while (!feof($handle)) {
        echo fread($handle, 1024 * 8); // Lê e envia em blocos de 8KB
        flush(); // Envia os dados imediatamente para o cliente
      }
      fclose($handle);
    }, 200, [
      'Content-Type' => 'application/json',
      'Cache-Control' => 'no-cache',
      'Content-Disposition' => 'inline; filename="' . basename($caminho) . '"',
    ]);
  }
}
