<?php

function tirageAleatoire()
{
    return rand(1, 1000); 
}

function estPair($nombre)
{
    return $nombre % 2 === 0;
}

function estImpair($nombre)
{
    return $nombre % 2 !== 0;
}

function suiteAleatoire()
{
    $suite = "";
    $nombresPairs = 0;
    $nombreImpairs = 0;

    while ($nombresPairs < 2 || $nombreImpairs < 1) {
        $nombre = tirageAleatoire();

        if (estPair($nombre) && $nombresPairs < 2) {
            $suite .= $nombre . " ";
            $nombresPairs++;
        } elseif (estImpair($nombre) && $nombreImpairs < 1 && $nombresPairs === 2) {
            $suite .= $nombre . " ";
            $nombreImpairs++;
        }
    }

    return $suite;
}

$suiteAleatoire = suiteAleatoire();
echo "Suite aléatoire obtenue : " . $suiteAleatoire;

?>
