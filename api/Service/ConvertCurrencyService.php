<?php

declare(strict_types=1);

namespace Api\Service;

use Api\Adapter\ExternalQuotesAPI;

class ConvertCurrencyService
{
  private $externalQuotesAPI;

  public function __construct()
  {
    $this->externalQuotesAPI = new ExternalQuotesAPI();
  }

  public function calculate(
    string $from,
    string $to,
    float $amount = 1
  ): float {
    $rate = $this->externalQuotesAPI->getExchangeRate($from, $to);
    $value = $amount * $rate;

    return $value;
  }
}
