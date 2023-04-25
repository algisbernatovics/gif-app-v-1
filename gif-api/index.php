<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

include 'gifApp/Views/Form.php';
include 'gifApp/Views/Show.php';
