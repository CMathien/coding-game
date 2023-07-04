<?php
/**
 * Convertir une chaîne de caractère en binaire sur le modèle suivant
 * Entrée : "C"
 * Binaire : "1000011"
 * Sortie : "0 0 00 0000 0 00"
 * 
 **/

function checkNumber($int) {
    if ($int === "1") {
        return "0";
    } else {
        return "00";
    }
}

function convertToBinary($string) {
    $binary = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $binary .= str_pad(decbin(ord($string[$i])), 7, '0', STR_PAD_LEFT);
    }
    return $binary;
}

$MESSAGE = stream_get_line(STDIN, 100 + 1, "\n");

$binary = convertToBinary($MESSAGE);
$answer = '';

$prev = $binary[0];
$count = 1;

for ($i = 1; $i < strlen($binary); $i++) {
    $current = $binary[$i];

    if ($current === $prev) {
        $count++;
    } else {
        $answer .= checkNumber($prev) . ' ' . str_repeat('0', $count) . ' ';
        $prev = $current;
        $count = 1;
    }
}

$answer .= checkNumber($prev) . ' ' . str_repeat('0', $count) . ' ';

echo trim($answer);
?>