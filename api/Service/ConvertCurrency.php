<?php

declare(strict_types=1);

namespace Api\Service;

use Api\Adapter\ExternalQuotesAPI;
use Exception;

class ConvertCurrency
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
    // if (isset($to)) {
    //   return throw new Exception("from and to values cannot be null or empty", 400);
    // }

    $rate = $this->externalQuotesAPI->getExchangeRate($from, $to);
    $value = $amount * $rate;

    return $value;
  }
}
