<?php
/**
 * Transformer un texte en art ASCII selon les règles énoncées
 **/

fscanf(STDIN, "%d", $L); // Largeur lettre
fscanf(STDIN, "%d", $H); // Hauteur lettre

// Tous les caractères non alphabétiques sont transformés en "?"
$T = preg_replace("/[^A-Za-z]/", '?', strtoupper(stream_get_line(STDIN, 256 + 1, "\n")));

// On recrée un tableau avec l'alphabet
$alphabet = range('A','Z');
$alphabet[26] = "?";

// On recherche chaque caractère dans l'alphabet pour récupérer l'index
$keys = [];
foreach(str_split($T) as $char){
    $keys[]=array_search($char, $alphabet);
}

// On récupère l'alphabet ASCII fourni et on le formate sous forme de tableau
for ($i = 0; $i < $H; $i++){
    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
    $tmp[] = str_split($ROW, $L);
}

// Pour chaque ligne de l'alphabet ASCII, on stocke les clés qui correspondent à celles présentes dans le mot
foreach($tmp as $line){
    foreach($keys as $value){
        $answer .= $line[$value];
    }
    $answer.="\n";
}

echo($answer."\n");
?>