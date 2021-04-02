<?php


/*öur généré les catégories des articles*/
function  article_produit($model)
{

    $bdd =  db_connect();

    $sel = $bdd->prepare('select * from articles  WHERE marque_model = ?');
    $sel->execute(array($model));
    $articles = $sel->fetchAll();

    return $articles;
}

/*Sélédctionner 1 fois la marque*/
function  article_model()
{

        $bdd =  db_connect();

    $sel = $bdd->prepare('select DISTINCT marque_model from articles ');
    $sel->execute();
    $articles_model = $sel->fetchAll();

    return $articles_model;
}