<?php

/*Pour la page qui affiche les produits trié*/
require ('model/produit.php');
require ('library/fonctions.php');

function produit ()
{
    $articles_model = article_model();

    //Template
    $template = 'produit';
    //Layout (contient header , footer)
    include('view/layout.php');

    /*
     *  Si il n'y a pas de nom d'article correspondant au nom_model,
     *  Alors on crée un nouvelle article avec le nom model
     *  on selectione les champs qui correspond au nom de l'article
     *
     * Selectionner tout les nom de model
     * Les afficher
     *
     * */
}