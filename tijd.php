<?php

$input = explode(" ", $argv[1]);

foreach ($input as $eenheid) {

    $laatstekarakter = substr($eenheid, -1);

    switch ($laatstekarakter) {

        case "d":
            $dagsec = (int) $eenheid * 60 * 60 * 24;
            break;

        case "u":
            $uursec = (int) $eenheid * 60 * 60;
            break;

        case "m":
            $minsec = (int) $eenheid * 60;
            break;

        case "s":
            $Seconden = (int) $eenheid;
            break;
    }
}

$output = $dagsec + $uursec + $minsec + $Seconden;

echo $output . " Seconden";
