<?php

namespace App\Livewire\Views;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SF Sistemas - Modulos')]
class Modulos extends Component
{
  public $modulos = [
    [
      'icon' => 'edit',
      'color' => 'red',
      'titulo' => 'Cadastros',
      'descricao' => 'Módulo de inserção de dados básicos no ERP como empresas, clientes, fornecedores, produtos, centros de custos entre outras informações utilizadas nos demais módulos.'
    ],
    [
      'icon' => 'cube',
      'color' => 'blue',
      'titulo' => 'Estoque',
      'descricao' => 'Gerencie seu estoque com eficiência e precisão. Nosso módulo de controle de estoque oferece uma solução completa para otimizar a logística da sua empresa, desde a organização dos produtos até a análise de dados.'
    ],
    [
      'icon' => 'receipt',
      'color' => 'yellow',
      'titulo' => 'Financeiro',
      'descricao' => 'Contas a pagar, contas a receber, conciliação bancária, cobrança eletrônica, controle de cheques e recibos, descontos de títulos entre outros processos da área financeira.'
    ],
    [
      'icon' => 'cash-register',
      'color' => 'cyan',
      'titulo' => 'Caixa',
      'descricao' => 'Permite o recebimento de pré-vendas, vendas direto no caixa, operações internas e caixa (abertura, sangria, suprimentos, fechamento) procedimentos fiscais (NF-e e NFC-e), recebimento de títulos entre outros.'
    ],
  ];
  public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
  {
    return view('livewire.views.modulos');
  }
}
