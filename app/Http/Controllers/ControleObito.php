<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

  // public function show(): JsonResponse
  // {

  // }
}
