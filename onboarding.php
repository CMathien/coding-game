<?php
// Trouver la cible la plus proche
// game loop
while (TRUE)
{
    fscanf(STDIN, "%s",
        $enemy1 // name of enemy 1
    );
    fscanf(STDIN, "%d",
        $dist1 // distance to enemy 1
    );
    fscanf(STDIN, "%s",
        $enemy2 // name of enemy 2
    );
    fscanf(STDIN, "%d",
        $dist2 // distance to enemy 2
    );

    // 2e version avec condition ternaire
    echo ($dist1 < $dist2) ? $enemy1."\n" : $enemy2."\n";

    // 1re version avec conditions
    // if ($dist1 < $dist2) {
    //     echo ($enemy1."\n");
    // } else {
    //     echo ($enemy2."\n");
    // }
}
?>