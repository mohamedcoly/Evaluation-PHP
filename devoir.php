<?php
    $annee = 2025 ;
  $anneeNaiss = 2003 ."<br>" ;
  function calculerage($anneeNaiss , $annee){
    $calcule =$annee-$anneeNaiss ;
    echo "Vous etes nee en " .$anneeNaiss . " en " . $annee . " Vous avez " . $calcule . " ans " ."<br>";
  }
  calculerage($anneeNaiss, $annee);
?>