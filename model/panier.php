<?php
function  article_panier($model)
{

    $bdd =  db_connect();

    $sel = $bdd->prepare('select * from paniers  WHERE id_user = ?');
    $sel->execute(array($model));
    $articles = $sel->fetchAll();

    return $articles;
}

function  article_pp($id)
{

    $bdd =  db_connect();

    $sel = $bdd->prepare('select id_produit from paniers  WHERE id_panier = ?');
    $sel->execute(array($id));
    $articles_pp = $sel->fetchAll();

    return $articles_pp;
}

function  select_panier($id)
{

    $bdd =  db_connect();

    $sel = $bdd->prepare('select * from articles  WHERE id_produit = ?');
    $sel->execute(array($id));
    $articles_panier = $sel->fetchAll();

    return $articles_panier;
}




/*Sélédctionner 1 fois la marque*/
/*function  article_panier2()
{

        $bdd =  db_connect();

    $sel = $bdd->prepare('select DISTINCT marque_model from articles ');
    $sel->execute();
    $articles_model = $sel->fetchAll();

    return $articles_model;
}*/
