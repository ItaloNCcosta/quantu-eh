<?php

declare(strict_types=1);

namespace Api\HTTP;

class Client
{
  /**
   * Executes and returns the api response
   */
  public function get(string $url)
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $response = curl_exec($ch);

    curl_close($ch);

    return $response;
  }
}
