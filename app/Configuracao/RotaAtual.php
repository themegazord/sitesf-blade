<?php

namespace App\Configuracao;

use Illuminate\Support\Facades\Route;

trait RotaAtual
{
  public function isRotaAlternativa(): bool {
    $rotasNavbarAlternativo = [
      'solucoes',
      'barrestaurante',
      'supermerc',
      'roupacalcado',
      'autoelecoficina',
      'discconv',
      'fabpeqporte',
      'confeccoes',
      'eventos',
      'licitacoes',
      'parceiros'
    ];

    return in_array(Route::currentRouteName(), $rotasNavbarAlternativo);
  }

  public function isRotaAtiva(): string {
    return Route::currentRouteName();
  }

  public function navbarPreta(): bool {
    $rotasNavbarAlternativo = [
      'home',
      'quemsomos',
      'modulos'
    ];

    return in_array(Route::currentRouteName(), $rotasNavbarAlternativo);
  }
}
