<?php session_start(); ?>
<!--Template for full page -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="data:image/jpeg;base64,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">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sanchez&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/560ce3d2ed.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <title>Smart Your Future</title>
</head>

<body>
    <!--Header-->
    <header>
        <div id="header_menu">
            <div class="sectiondiv">
                <div id="déroul" class="DEL" style="overflow: auto; min-height: 85%;">
                    <a href="#" class="fermer" onclick="closeNav()">×</a>
                    <a class="colorlien" href="accueil">Accueil</a>
                    <a class="colorlien" href="register">Inscription</a>
                    <a class="colorlien" href="login">Connexion</a>
                    <a class="colorlien" href="profil">Profil</a>
                    <a class="colorlien" href="disconnect">Déconnexion</a>
                    <a class="colorlien" href="ajout">Ajouter un article</a>
                    <a class="colorlien" href="produit">Découvrer nos produits</a>
                    <a class="colorlien" href="admin">Administrateur</a>
                    <a class="colorlien" href="gerant">Gérant</a>
                    <a class="colorlien" href="panier">Panier</a>
                    <a class="colorlien" href="paiment">Paiement</a>
                    <a class="colorlien" href="historique_commende">Historique des commandes</a>
                    <a class="colorlien" href="historique_vendeur">Historique de vente</a>
                </div>
                <span style="font-size:30px;" onclick="openNav()">
                    <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                </span>
                <script>
                    function openNav() {
                        document.getElementById("déroul").style.width = "250px";
                    }

                    function closeNav() {
                        document.getElementById("déroul").style.width = "0";
                    }
                </script>
            </div>
        </div>

        <div id="header_title">
            <div id="header_title_img">
                <img src=img_docs/logo.png>
            </div>
            <a href="accueil">
                <div id="header_h1">
                    <h1>Smart Your Future</h1>
                </div>
            </a>
        </div>
        <div id="header_lien">
            <div id="header_lien_grid1">
                <form method="post">
                    <i id="header_absolute" class="fa fa-search" aria-hidden="true">
                        <input id="header_submit" type="submit">
                    </i>
                    <input type="search" id="recherche">
                    <label for="recherche">
                        <i class="fa fa-microphone" aria-hidden="true"></i>
                    </label>
                </form>
            </div>
            <div id="header_lien_button">
                <button><a href="disconnect">Déconexion</a> </button>
            </div>
            <i id="header_panier" class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
        </div>
    </header>

    <!--Main-->

    <!--Template-->
    <?php include $template . '.php' ?>

    <!--Footer-->
    <footer>
        <div id="footer_div1">

            <div>
                <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-paypal fa-3x" aria-hidden="true"></i>
                <i class="fa fa-cc-visa fa-3x" aria-hidden="true"></i>
                <i class="fa fa-cc-mastercard fa-3x" aria-hidden="true"></i>
            </div>
        </div>
        <div id="footer_div2">
            <p>Evan Azemard</p>
            <p>Copyright 2021 © Smart Your Future</p>
            <p>Clément Nahmens</p>
        </div>
    </footer>
</body>

</html>