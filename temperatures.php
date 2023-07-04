<?php
/**
 * Trouver la température la plus proche de zéro
 **/


/** Deuxième solution optimisée */

// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));
$result = 0;

if ($n > 0) {
    $closestTemperature = intval($inputs[0]);

    for ($i = 1; $i < $n; $i++) {
        $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526

        // On vérifie si la température (convertie en absolue, donc positive) est inférieure à celle stockée
        // Ou si la température (négative ou positive) est égale à la plus proche (en négatif) tout en étant supérieure à 0. Ainsi si on a comme température la plus -2 et comme température à tester 2, on stockera 2 car elle est positive
        if (abs($t) < abs($closestTemperature) || ($t == -$closestTemperature && $t > 0)) {
            $closestTemperature = $t;
        }
    }

    $result = $closestTemperature;
}

echo($result . "\n");

/** Première solution avec tableaux => pas optimisée
    // $n: the number of temperatures to analyse
    fscanf(STDIN, "%d", $n);
    $inputs = explode(" ", fgets(STDIN));
    $result = 0;
    if($n>0){
        $diffs = [];
        for ($i = 0; $i < $n; $i++)
        {
            $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526

            // Calcul de l'écart entre la température et zéro
            $diff = 0 - $t;
            // Conversion en positif
            if ($diff < 0) $diff = 0 - $diff;
            $diffs[$i] = $diff;
        }
        asort($diffs);
        
        $i=0;
        $prev="";
        //Parcourir le tableau à la recherche de la valeur la plus proche
        foreach($diffs as $key => $value){
            if($i === 0) {
                $firstKey = $key;
                $prev = $value;
            } elseif ($i === 1 && $value === $prev){
                $secondKey = $key;
            }
            $i++;
        }

        // Si deux valeurs ont le même écart, on choisit la positive
        if(isset($secondKey)){
            if($inputs[$firstKey] > $inputs[$secondKey]) $result = $inputs[$firstKey];
            else $result = $inputs[$secondKey];
        } else {
            $result = $inputs[$firstKey];
        }
    }
    echo($result);
*/
