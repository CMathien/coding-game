<?php
/**
 * Faire atterir une fusée avec la vitesse, la rotation, la quantité de fuel et la poussée des moteurs
 * Gravité Mars = 3,711 m/s². 
 * Donc : Poussée = 4 env.
 * Vitesse vert. <= 40 m/s
 **/

// $surfaceN: the number of points used to draw the surface of Mars.
fscanf(STDIN, "%d", $surfaceN);
for ($i = 0; $i < $surfaceN; $i++)
{
    // $landX: X coordinate of a surface point. (0 to 6999)
    // $landY: Y coordinate of a surface point. By linking all the points together in a sequential fashion, you form the surface of Mars.
    fscanf(STDIN, "%d %d", $landX, $landY);
}

// game loop
while (TRUE)
{
    // $hSpeed: the horizontal speed (in m/s), can be negative.
    // $vSpeed: the vertical speed (in m/s), can be negative.
    // $fuel: the quantity of remaining fuel in liters.
    // $rotate: the rotation angle in degrees (-90 to 90).
    // $power: the thrust power (0 to 4).
    fscanf(STDIN, "%d %d %d %d %d %d %d", $X, $Y, $hSpeed, $vSpeed, $fuel, $rotate, $power);

    //On vérifie s'il reste du fuel, que la puissance n'est pas au max (4) et que la vitesse verticale ne dépasse pas 4 pour augmenter la puissance, sinon on la diminue
    if($fuel>0 && $power<4 && $vSpeed<4){
        $power++;
    }elseif($fuel>0 && $power>0){
        $power--;
    }

    echo($rotate." ".$power."\n");

}
?>