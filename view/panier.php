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

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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