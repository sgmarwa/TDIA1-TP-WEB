<?php
function sommeCubesChiffres($nombre) {
    $somme = 0;
    $chiffres = str_split((string)$nombre); 
    foreach ($chiffres as $chiffre) {
        $somme += pow($chiffre, 3); 
    }
    return $somme;
}

echo "<ul>";
for ($i = 1; $i < 1000; $i++) {
    if ($i === sommeCubesChiffres($i)) {  
        echo "<li>$i</li>"; 
    }
}
echo "</ul>";
?>
