<!--Page profil-->
<?php
session_start();
if(isset($_POST["submit"])){
    $user = new C_profil();
    $errors = $user->profil($_POST['n_login'],$_POST['n_password']);
} else {
    $errors = array();
}
?>

<a href="accueil">accueil</a>
<section class="main-sec">
    <h1></h1>
    <form method="POST" action="profil.php">
        <fieldset>
            <legend class="main__title__global">
                Modification profil
            </legend>

            <div>
                <label class="connexion__label" for="login">Nouveau login</label>
                <input type="text" name="n_login" class="main-sec-inp" id="login" onFocus="this.value='';" autocomplete="off" />
            </div>

            <div>
                <label class="connexion__label" for="password1">Nouveau mot de passe</label>
                <input type="password" name="n_password" class="main-sec-inp" id="password" placeholder="Mot de passe" />
            </div>

            <button class="index__button" type="submit" name="submit" value="Submit">Envoyer</button>
            <br />
            <small>Mettre à jour vos informations vous déconnectera</small>
        </fieldset>
    </form>
</section>
