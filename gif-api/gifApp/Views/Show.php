<?php
$searchPhrase = $_POST['searchPhrase'];
$resultLimit = $_POST['limit'];

$app = new gifApp\StartUp($searchPhrase, $resultLimit);
$urls = $app->getUrls();

foreach ($urls as $key => $url) {
    $currentUrl = $url->getUrl();
    echo "<image><img src=$currentUrl></image>";
}