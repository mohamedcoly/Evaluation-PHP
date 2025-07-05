<?php
$nbre1 = 10;
$nbre2 = 5;
// Opérations 
$additon ;
$subtraction ;
$multiplication ;
$division ;
function operation($nbre1, $nbre2) {
    $additon = $nbre1 + $nbre2;
    $subtraction = $nbre1 - $nbre2;
    $multiplication = $nbre1 * $nbre2;
    if ($nbre2 != 0) {
        $division = $nbre1 / $nbre2;   
    }
    else {
        echo "Division par zéro impossible<br>";
    }
    echo "Addition: $additon <br>";
    echo "Soustraction: $subtraction <br>";
    echo "Multiplication: $multiplication <br>";
    echo "Division: $division <br>";
}
// Appel de la fonction
operation($nbre1, $nbre2, );
?>

