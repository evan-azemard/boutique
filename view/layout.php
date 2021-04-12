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
    <title>Smart Your Future</title>
</head>
<body>
<!--Header-->
<header>
    <div id="header_menu"><i class="fa fa-user-circle fa-4x" aria-hidden="true"></i></div>
    <div id="header_title">
        <div id="header_title_img">
            <img src=img_docs/logo.png>
        </div>
        <div id="header_h1"><h1>Smart Your Future</h1></div>
    </div>
    <div id="header_lien">
        <div id="header_lien_grid1">
            <form method="post">
                <i id="header_absolute" class="fa fa-search" aria-hidden="true">
                    <input id="header_submit" type="submit">
                </i>
                <input type="text" id="recherche">
                <label for="recherche">
                    <i class="fa fa-microphone" aria-hidden="true"></i>
                </label>
            </form>
        </div>
        <div id="header_lien_button">
            <button><a href="#">Déconexion</a> </button>
        </div>
        <i id="header_panier" class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
    </div>
</header>
<!--Main-->
<main>
    <!--Template-->
    <?php include $template. '.php' ?>
</main>
<!--Footer-->
<footer>
<p>1</p>
    <div id="trai">3</div>
</footer>
</body>
</html>
