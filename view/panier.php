<!-- <main id="panier_main">
    <section id="panier_section">
        <article id="panier_h1">
            <h1>Votre panier</h1>
        </article>
        <article class="panier_card">
            <div class="card_panier_img">
                <img src="img_docs/exemple.png.jpg" alt="exemple">
            </div>
            <div class="card_panier_text">
                <div class="card_panier_text_div1">
                    <p>
                        blablablablablablbalblablablablablablblablablablablablbalblablablablablablblablablablablablbalblablablablablablblablablablablablbalblablablablablablblablablablablablbalblablablablablablblablablablablablbalblablablablablablblablablablablablbalblablablablablabl
                    </p>
                </div>
                <div class="card_panier_text_div2">
                    <div class="panier_commende">
                        <h2>LG WING 5G</h2>
                    </div>
                    <div class="panier_commende2">
                        <div>700 €</div>
                        <form name="panierform1" method="post">
                            <input name="numberpanier" aria-label="number" placeholder="1" type="number">
                        </form>
                    </div>
                    <div class="panier_commende">
                        <form name="panierform1" method="post">
                            <input type="submit" class="button_panier">
                        </form>
                    </div>
                </div>
            </div>
        </article>
        <div class="traimoyenpanier"></div>

        <article id="commender_panier">
            <div id="totale_panier">
                <h3>Votre totale:</h3>
                <p>1400 € TTC</p>
            </div>
            <form name="panier_valider" method="post">
                <input type="submit" value="Passer au paiment" class="button_panier">
            </form>
        </article>
    </section>
</main> -->




<?php

//fonction creation panier

function creationPanier()
{
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
        $_SESSION['panier']['libelleProduit'] = array();
        $_SESSION['panier']['qteProduit'] = array();
        $_SESSION['panier']['prixProduit'] = array();
        $_SESSION['panier']['verrou'] = false;
    }
    return true;
}

// fonction verouillage des articles 

function isVerrouille()
{
    if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
        return true;
    else
        return false;
}

//fonction ajouter un article

function ajouterArticle($libelleProduit, $qteProduit, $prixProduit)
{

    //Si le panier existe
    if (creationPanier() && !isVerrouille()) {

        //Si le produit existe déjà on ajoute seulement la quantité
        $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

        if ($positionProduit !== false) {
            $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit;
        } else {
            //Sinon on ajoute le produit
            array_push($_SESSION['panier']['libelleProduit'], $libelleProduit);
            array_push($_SESSION['panier']['qteProduit'], $qteProduit);
            array_push($_SESSION['panier']['prixProduit'], $prixProduit);
        }
    } else
        echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


//fonction supprimer un article 

function supprimerArticle($libelleProduit)
{
    //Si le panier existe
    if (creationPanier() && !isVerrouille()) {
        //Nous allons passer par un panier temporaire
        $tmp = array();
        $tmp['libelleProduit'] = array();
        $tmp['qteProduit'] = array();
        $tmp['prixProduit'] = array();
        $tmp['verrou'] = $_SESSION['panier']['verrou'];

        for ($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++) {
            if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit) {
                array_push($tmp['libelleProduit'], $_SESSION['panier']['libelleProduit'][$i]);
                array_push($tmp['qteProduit'], $_SESSION['panier']['qteProduit'][$i]);
                array_push($tmp['prixProduit'], $_SESSION['panier']['prixProduit'][$i]);
            }
        }
        //On remplace le panier en session par notre panier temporaire à jour
        $_SESSION['panier'] =  $tmp;
        //On efface notre panier temporaire
        unset($tmp);
    } else
        echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

// fonction modifié nombre article 

function modifierQTeArticle($libelleProduit, $qteProduit)
{
    //Si le panier existe
    if (creationPanier() && !isVerrouille()) {
        //Si la quantité est positive on modifie sinon on supprime l'article
        if ($qteProduit > 0) {
            //Recherche du produit dans le panier
            $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

            if ($positionProduit !== false) {
                $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit;
            }
        } else
            supprimerArticle($libelleProduit);
    } else
        echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

// fonction affiche montant total

function MontantGlobal()
{
    $total = 0;
    for ($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++) {
        $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
    }
    return $total;
}

// fonction compter article

function compterArticles()
{
    if (isset($_SESSION['panier']))
        return count($_SESSION['panier']['libelleProduit']);
    else
        return 0;
}

// fonction supprimer article du panier

function supprimePanier()
{
    unset($_SESSION['panier']);
}
?>

<?php
session_start();
include_once("fonctions-panier.php");

$erreur = false;

$action = (isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : null));
if ($action !== null) {
    if (!in_array($action, array('ajout', 'suppression', 'refresh')))
        $erreur = true;

    //récupération des variables en POST ou GET
    $l = (isset($_POST['l']) ? $_POST['l'] : (isset($_GET['l']) ? $_GET['l'] : null));
    $p = (isset($_POST['p']) ? $_POST['p'] : (isset($_GET['p']) ? $_GET['p'] : null));
    $q = (isset($_POST['q']) ? $_POST['q'] : (isset($_GET['q']) ? $_GET['q'] : null));

    //Suppression des espaces verticaux
    $l = preg_replace('#\v#', '', $l);
    //On vérifie que $p est un float
    $p = floatval($p);

    //On traite $q qui peut être un entier simple ou un tableau d'entiers

    if (is_array($q)) {
        $QteArticle = array();
        $i = 0;
        foreach ($q as $contenu) {
            $QteArticle[$i++] = intval($contenu);
        }
    } else
        $q = intval($q);
}

if (!$erreur) {
    switch ($action) {
        case "ajout":
            ajouterArticle($l, $q, $p);
            break;

        case "suppression":
            supprimerArticle($l);
            break;

        case "refresh":
            for ($i = 0; $i < count($QteArticle); $i++) {
                modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i], round($QteArticle[$i]));
            }
            break;

        default:
            break;
    }
}

echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <title>Votre panier</title>
</head>

<body>

    <form method="post" action="panier.php">
        <table style="width: 400px">
            <tr>
                <td colspan="4">Votre panier</td>
            </tr>
            <tr>
                <td>Libellé</td>
                <td>Quantité</td>
                <td>Prix Unitaire</td>
                <td>Action</td>
            </tr>


            <?php
            if (creationPanier()) {
                $nbArticles = count($_SESSION['panier']['libelleProduit']);
                if ($nbArticles <= 0)
                    echo "<tr><td>Votre panier est vide </ td></tr>";
                else {
                    for ($i = 0; $i < $nbArticles; $i++) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]) . "</ td>";
                        echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"" . htmlspecialchars($_SESSION['panier']['qteProduit'][$i]) . "\"/></td>";
                        echo "<td>" . htmlspecialchars($_SESSION['panier']['prixProduit'][$i]) . "</td>";
                        echo "<td><a href=\"" . htmlspecialchars("panier.php?action=suppression&l=" . rawurlencode($_SESSION['panier']['libelleProduit'][$i])) . "\">XX</a></td>";
                        echo "</tr>";
                    }

                    echo "<tr><td colspan=\"2\"> </td>";
                    echo "<td colspan=\"2\">";
                    echo "Total : " . MontantGlobal();
                    echo "</td></tr>";

                    echo "<tr><td colspan=\"4\">";
                    echo "<input type=\"submit\" value=\"Rafraichir\"/>";
                    echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

                    echo "</td></tr>";
                }
            }
            ?>
        </table>
    </form>
</body>

</html>