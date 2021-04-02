<?php

//Enregistre users
function RegisterA($login, $hpass)
{
    $bdd =  db_connect();
    $rank = 1;$sql = $bdd->prepare("INSERT INTO users (pseudo, password, rank) VALUES (?, ?, ?)");
    $sql->execute(array($login, $hpass, $rank));
}


//Enregistre sellers
function RegisterB($login, $hpass)
{
    $bdd =  db_connect();
    $rank = 2;
    $sql = $bdd->prepare("INSERT INTO sellers (pseudo, password, rank) VALUES (?, ?, ?)");
    $sql->execute(array($login, $hpass, $rank));
}


/*Pour vérifier que le pseudo n'est pas dèjà pris */
function select ()
{
    $bdd =  db_connect();

    $sel = $bdd->prepare("SELECT * FROM users");
    $sel = $sel->execute();

    return $sel;
}
