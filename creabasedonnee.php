<?php
/* tenter une connexion au server Mysql.
*/
$link = mysqli_connect("localhost","root", "");
//verifier la connexion
if ($link ===false){
    die ("ERREUR : Impossible de se connecter." .
    mysqli_connect_error());
}
//executer une requete de creation de base de donnees
$sql ="CREATE DATABASE demo";
if(mysqli_query($link, $sql)){
    echo "Base de Donnee Cree avec Succes";
}
else{
    echo "Impossible: d'executer $sql ." . mysqli_error($link);
}