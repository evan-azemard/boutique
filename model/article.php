<?php

/*Affiche les info d'un article prècis */
function article_info($id)
{
    $bdd =  db_connect();

    $sel = $bdd->prepare('select * from articles  WHERE id_produit = ?');
    $sel->execute(array($id));
    $articles = $sel->fetch();

    return $articles;


}