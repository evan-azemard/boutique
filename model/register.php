<?php

//Enregistre users
function RegisterA($pseudo, $hpass, $tel, $email, $age, $prenom, $nom, $adresse)
{
    $bdd =  db_connect();
    $rank = 1;
    $sql = $bdd->prepare("INSERT INTO users (pseudo, password, tel, email, age, prenom, nom, adresse, rank) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->execute(array($pseudo, $hpass, $tel, $email, $age, $prenom, $nom, $adresse,$rank));
}


//Enregistre sellers
function RegisterB($pseudo, $hpass, $tel, $email, $age, $prenom, $nom, $adresse)
{
    $bdd =  db_connect();
    $rank = 2;
    $sql = $bdd->prepare("INSERT INTO sellers (pseudo, password, tel, email, age, prenom, nom, adresse, rank) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->execute(array($pseudo, $hpass, $tel, $email, $age, $prenom, $nom, $adresse,$rank));
}


/*Pour vérifier que le pseudo n'est pas dèjà pris */
function select ()
{
    $bdd =  db_connect();

    $sel1 = $bdd->prepare("SELECT * FROM users ");
    $sel1->execute();
    $sel = $sel1->fetchAll();
    return $sel;
}
/*sellers*/
function select2 ()
{
    $bdd =  db_connect();

    $sel1 = $bdd->prepare("SELECT * FROM sellers ");
    $sel1->execute();
    $selle = $sel1->fetchAll();
    return $selle;
}