<?php
/*Ce fichier fait appelle au controleur pour ensuite afficher des informations*/

//Config
require ('config/database.php');

//Controleur
require ('controllers/accueil.php');
require('controllers/Login.php');
require('controllers/Profil.php');
require('controllers/disconnect.php');
require('controllers/Register.php');
require('controllers/Ajout.php');
require('controllers/Produit.php');
require('controllers/article.php');
require('controllers/admin.php');
//switche d'une page à une autre

if (isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case 'register':
            register();
            break;
        case 'accueil';
            accueil();
            break;
        case 'login';
            login();
            break;
        case 'disconnect';
            disco();
            break;
        case 'profil';
            profil();
            break;
        case 'ajout';
            ajout();
            break;
        case 'produit';
            produit();
            break;
        case 'article';
            article();
            break;
        case 'admin';
            admin();
            break;
    }
}else
{
    //Page d'acceuil
    accueil();
}

?>