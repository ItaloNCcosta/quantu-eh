<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Api\Core\Router;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

session_start();
header('Content-Type: application/json');

Router::run();
