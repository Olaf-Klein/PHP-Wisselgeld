<?php

if (!isset($argv[1])) {
    echo "Geen wisselgeld";
    exit;
}

$restbedrag = round(floatval($argv[1] / 0.05)) * 0.05;

const MONEY = array(50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05);

foreach (MONEY as $geld) {
    if ($restbedrag >= $geld) {
        $amount = floor($restbedrag / $geld);
        $restbedrag = $restbedrag - ($amount * $geld);
        if ($geld >= 1) {
            echo "$amount x $geld euro" . PHP_EOL;
        } else {
            echo $amount . " x " . 100 * $geld . " cent" . PHP_EOL;
        }
    }
}