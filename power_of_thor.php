<?php
/**
 * Indiquer au personnage le sens dans lequel il doit se déplacer pour rejoindre son éclair
 **/

fscanf(STDIN, "%d %d %d %d",
    $lightX, // the X position of the light of power
    $lightY, // the Y position of the light of power
    $initialTX, // Thor's starting X position
    $initialTY // Thor's starting Y position
);

$thorX = $initialTX;
$thorY = $initialTY;

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d",
        $remainingTurns
    );

    $directionX = '';
    $directionY = '';
    
    // On détermine s'il doit se déplacer vers l'Ouest ou l'Est. Si aucun déplacement sur cet axe, la valeur reste vide
    if ($thorX > $lightX){
        $directionX = 'W';
        $thorX -= 1;
    } elseif($thorX < $lightX){
        $thorX += 1;
        $directionX = 'E';
    }
    
    // On détermine s'il doit se déplacer vers le Nord ou le Sud. Si aucun déplacement sur cet axe, la valeur reste vide
    if ($thorY > $lightY){
        $thorY -= 1;
        $directionY = 'N';
    } elseif($thorY < $lightY){
        $thorY += 1;
        $directionY = 'S';
    }
    
    echo ($directionY . $directionX . "\n");
}

?>