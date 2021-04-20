<?php

//Update users
function UpdateA($pseudo, $hpass, $tel, $email, $age, $prenom, $nom, $adresse)
{
    $bdd =  db_connect();
    $sql = $bdd->prepare("UPDATE users SET pseudo= ?, password = ? , tel = ? , email = ? , age = ? , prenom = ? , nom = ? , adresse = ? WHERE id_user = ?");
    $sql->execute(array($pseudo, $hpass, $tel, $email, $age, $prenom, $nom, $adresse,  $_SESSION["id"]));
}


//Update sellers
function UpdateB($pseudo, $hpass, $tel, $email, $age, $prenom, $nom, $adresse)
{
    $bdd =  db_connect();
    $sql = $bdd->prepare("UPDATE sellers SET pseudo= ?, password = ? , tel = ? , email = ? , age = ? , prenom = ? , nom = ? , adresse = ? WHERE id_user = ?");
    $sql->execute(array($pseudo, $hpass, $tel, $email, $age, $prenom, $nom, $adresse,  $_SESSION["id"]));
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