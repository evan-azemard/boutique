<?php

/*Pour ajouter un produit*/

function ajouter($imgname,$imgsize,$imgtype,$imgtmp)
{

    $bdd = db_connect();

    $sql = $bdd->prepare("INSERT INTO articles (nom_img,taille_img,type_img,bin_img) VALUES (?,?,?,?)");
    $sql->execute(array($imgname, $imgsize, $imgtype, $imgtmp));
}





