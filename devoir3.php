<?php
$tablemult = 5; // Table de multiplication à afficher
echo "Table de multiplication de $tablemult :<br>";
// Affichage de la table de multiplication
// Boucle pour afficher les résultats de la multiplication
// de 1 à 10
for ($i = 1; $i <= 10; $i++) {
    echo "$tablemult x $i = " . ($tablemult * $i) . "<br>";
}