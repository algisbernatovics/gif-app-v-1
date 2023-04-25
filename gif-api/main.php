<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;

$searchPhrase = $_POST['searchPhrase'];
$resultLimit = $_POST['limit'];
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$app = new gifApp\StartUp($searchPhrase, $resultLimit);
$urls = $app->getUrls();
$urls = $app->getUrls();
foreach ($urls as $key => $url) {
    $currentUrl = $url->getUrl();
    echo "<image><img src=$currentUrl></image>";
}


