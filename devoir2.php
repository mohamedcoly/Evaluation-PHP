<?php
$PASSWD = "?@20..91";
if (strlen($PASSWD) < 8)
    echo ("Mot de passe trop court");
elseif (preg_match("/[A-Z]/", $PASSWD))
    echo ("Mot de passe doit contenir au moins une majuscule");
elseif (preg_match("/\d/", $PASSWD))
    echo ("Mot de passe doit contenir au moins un chiffre");
?>