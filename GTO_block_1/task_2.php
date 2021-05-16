<?php

$rub = $_GET['рублей'];
$cop = $_GET['копеек'];
$quantity = $_GET['количество'];

echo $rub * $quantity + intdiv($cop * $quantity, 100) . ' ';
echo $cop * $quantity % 100;
