<?php

/*Pour ajouter un produit*/
function RegisterArticle($nom,$resum,$marque)
{
    $bdd =  db_connect();

    $sql = $bdd->prepare("INSERT INTO articles (nom_model, resum, marque_model) VALUES (?,?,?)");
    $sql->execute(array($nom, $resum, $marque));
}