<!--lOGIN PAGE-->
<?php
session_start();
if(isset($_POST["submit"])){
    $user = new C_Login();
    $errors = $user->loginF($_POST['login'], $_POST['password'], $_POST['gender']);
} else {
    $errors = array();
}
?>
<?php include 'error.php'; ?>
<main id="login_main">
    <section id="section_login">
        <form method="post" id="login_form">
            <article class="login_article_button">
                <div class="login_labput_button">
                    <p id="lolo">Login de Lucas</p>
                </div>
            </article>
            <article class="login_article">
                <div class="login_labput">
                    <label for="pseudo">Pseudo</label>
                </div>
                <div class="login_labput">
                    <input type="text" id="pseudo" required>
                </div>
            </article>
            <article class="login_article">
                <div class="login_labput">
                    <label for="password">Password</label>

                </div>
                <div class="login_labput">
                    <input type="password" id="password" required>

                </div>
            </article>
            <article class="login_article">
                <div class="login_labput">
                    <label for="adresse">Adresse compléte</label>

                </div>
                <div class="login_labput">
                    <input type="text" id="adresse" required>

                </div>
            </article>
            <article class="login_article">
                <div class="login_labput2">
                    <p class="lolo2">Type de comtpe </p>
                </div>
                <div id="login_labput_radio">
                    <div class="radio">
                        <div class="centre_radio">
                            <label class="lolo2" for="choix1">Vendeur</label>
                        </div>
                        <div class="centre_radio2">
                            <input  class="lolo3" type="radio" required value="Vendeur" name="choix" id="choix1" placeholder="">
                        </div>
                    </div>
                    <div class="radio">
                        <div class="centre_radio">
                            <label  class="lolo2" for="choix2">Utilisateur</label>
                        </div>
                        <div class="centre_radio2">
                            <input class="lolo3" type="radio" required value="Utilisateur"  name="choix" id="choix2">
                        </div>
                    </div>
                </div>
            </article>
            <article class="login_article_button">
                <div class="login_labput_button">
                    <input type="submit" class="button" value="Valider les choix" name="register_submit">
                </div>
            </article>
        </form>
    </section>
</main>


