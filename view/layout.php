<!--Template for full page -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <div id="déroul" class="DEL" style="overflow: auto; height: 85%;">
                <a href="#" class="fermer" onclick="closeNav()">×</a>
                <a class="colorlien" href="accueil">accueil</a>
                <a class="colorlien" href="register">Register</a>
                <a class="colorlien" href="login">Login</a>
                <a class="colorlien" href="profil">profil</a>
                <a class="colorlien" href="disconnect">Disconect</a>
                <a class="colorlien" href="ajout">Ajouter un article</a>
                <a class="colorlien" href="produit">Découvrer nos produits</a>
                <a class="colorlien" href="admin">Admin</a>
                <a class="colorlien" href="gerant">Gérant</a>
                <a class="colorlien" href="panier">Panier</a>
                <a class="colorlien" href="historique_vendeur">Historique_vendeur</a>
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
        <a href="accueil"><div id="header_h1"><h1>Smart Your Future</h1></div></a>
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
    <?php include $template. '.php' ?>

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
