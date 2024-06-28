<?php

namespace Api\Controllers;

use Api\Service\ConvertCurrencyService;

class CurrencyController
{
  private $service;

  public function __construct()
  {
    $this->service = new ConvertCurrencyService();
  }

  // curl -X GET 'http://localhost:8000/api/currency-convert?from=USD&to=BRL&amount=100'
  public function convert()
  {
    $from = $_GET['from'] ?? null;
    $to = $_GET['to'] ?? null;
    $amount = $_GET['amount'] ?? 1;

    if (!$from || !$to) {
      echo "Os parâmetros 'from' e 'to' são obrigatórios.";
      return;
    }

    $convertedAmount = $this->service->calculate($from, $to, $amount);

    echo json_encode([
      'from' => $from,
      'to' => $to,
      'amount' => $amount,
      'convertedAmount' => $convertedAmount,
    ]);
  }
}
