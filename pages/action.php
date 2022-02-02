<?php

require_once '../vendor/autoload.php';
use App\classes\Series;

$series = new Series($_POST);
$result = $series->getResult();
$msg = $series->getMessage();
include 'index.php';