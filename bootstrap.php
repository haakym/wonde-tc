<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$client = new \Wonde\Client($_ENV['WONDE_API_TOKEN']);
$school = $client->school($_ENV['WONDE_SCHOOL_ID']);
