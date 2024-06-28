<?php

declare(strict_types=1);

namespace Api\Adapter;

use Api\HTTP\Client;

class ExternalQuotesAPI
{
  private $httpClient;
  private $externalApi;

  public function __construct()
  {
    $this->httpClient = new client();
    $this->externalApi = $_SERVER['EXTERNAL_API'];
  }

  /**
   * Get country currency rate value
   * @var string $from country of origin
   * @var string $to destiny country
   */
  public function getExchangeRate(string $from, string $to): string
  {
    $url = $this->externalApi . $from . "-" .  $to;
    $response = $this->httpClient->get($url);
    $data = json_decode($response, true);

    return $data[$from . $to]['bid'];
  }
}
