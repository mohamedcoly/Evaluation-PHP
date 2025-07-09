<?php
/* tenter une connexion au server Mysql.
*/
$link = mysqli_connect("localhost","root", "");
//verifier la connexion
if ($link ===false){
    die ("ERREUR : Impossible de se connecter." .
    mysqli_connect_error());
}

//imprimer les informations
echo "Connecxion reussie. information sur l'hote: " . mysqli_get_host_info($link);