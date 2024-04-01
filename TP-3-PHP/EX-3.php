
<?php
//avec while
function genererNombreAleatoire() {
    return rand(100, 999);
}

function obtenirNombreAgain($nombre) {
    $essais = 0;
    $nombreAleatoire = 0;

    while ($nombreAleatoire !== $nombre) {
        $nombreAleatoire = genererNombreAleatoire();
        $essais++;
    }

    return $essais;
}

$nombre = genererNombreAleatoire();
$essais = obtenirNombreAgain($nombre);

echo "Le nombre : $nombre <br> Nombre d'essais réalisés : $essais  ";

?>


<?php
//avec for
function genererNombreAleatoire() {
    return rand(100, 999);
}

function obtenirNombreAgain($nombre) {
    $essais = 0;

    for ($nombreAleatoire = 0; $nombreAleatoire !== $nombre; $essais++) {
        $nombreAleatoire = genererNombreAleatoire();
    }

    return $essais;
}

$nombre = genererNombreAleatoire();
$essais = obtenirNombreAgain($nombre);

echo "Le nombre  : $nombre <br> Nombre d'essais réalisés : $essais  ";


?>
