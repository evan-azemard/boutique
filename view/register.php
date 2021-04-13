<!--Page Register-->
<?php
if(isset($_POST["submit"])){
    $user = new Utilisateurs();
    $errors = $user->register($_POST['login'], $_POST['password'], $_POST['r_password'], $_POST['gender']);
} else {
    $errors = array();
}
?>
<?php include 'error.php'; ?>

<div class="bg__inscription">
    <main id="register_main">
        <section id="register_section1">
            <article id="register_titre">
                <h1>Politique d'inscription<br> de Smart Your Future</h1>
            </article>
            <article id="register_text1">
                <p><span id="register_g1">"</span>Pour le contenu protégé par les droits de propriété intellectuelle, comme les photos ou vidéos
                    (contenu de propriété intellectuelle), vous nous donnez spécifiquement la permission suivante (…)<br><br>
                    vous nous accordez une licence non-exclusive, transférable, sous-licenciable, sans redevance et
                    mondiale pour l’utilisation des contenus de propriété intellectuelle que vous </p>

                <p>
                publiez sur Smart Your Future ou en relation avec Smart Your Future (licence de propriété intellectuelle).<br><br>
                Cette licence de propriété intellectuelle se termine lorsque vous supprimez vos contenus de propriété intellectuelle ou votre
                compte, sauf si votre contenu a été partagé avec d’autres personnes qui ne l’ont pas supprimé.<span id="register_g2">"</span></p>
            </article>
        </section>
        <section id="register_section2">
                <form method="post" id="register_form">
                    2
                </form>
        </section>
    </main>
</div>



































<!--      <form class="form__connexion" method="POST">
                <fieldset class="shadow__block container__conn">
                    <legend class="connexion__legend">
                        Veuillez remplir ce formulaire afin de vous inscrire
                    </legend>
                    <div>
                        <label class="connexion__label" for="login">Login</label>
                        <input type="text" name="login" class="form-control" id="login" placeholder="Login" autocomplete="off" required />
                    </div>

                    <div>
                        <label class="connexion__label" for="password">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" required />
                    </div>

                    <div>
                        <label class="connexion__label" for="repeatPassword">Confirmer le mot de passe</label>
                        <input type="password" name="r_password" class="form-control" id="repeatPassword" placeholder="Confirmer le mot de passe" required />
                    </div>

                    <div>
                        <input type="radio" id="seller" name="gender" value="2"  />
                        <label for="seller">Seller</label><br>
                        <input type="radio" id="user" name="gender" value="1" checked />
                        <label for="user">User</label><br>
                    </div>

                    <button class="index__button" type="submit" name="submit" value="submit">Envoyer</button>

                </fieldset>
            </form>-->