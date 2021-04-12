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
<section>
    <form class="form__login" method="POST">
        <fieldset class="shadow__block container__conn">
            <legend class="connexion__legend">
                Login
            </legend>
            <small>* Tous les champs sont obligatoires</small>
            <div>
                <label class="connexion__label" for="login">Login</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="Login" autocomplete="on" required />
            </div>

            <div>
                <label class="connexion__label" for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" required />
            </div>

            <div>
                <input type="radio" id="seller" name="gender" value="2"  />
                <label for="seller">Seller</label><br>
                <input type="radio" id="user" name="gender" value="1" checked />
                <label for="user">User</label><br>
            </div>

            <button class="index__button" type="submit" name="submit" value="submit">Envoyer</button>

        </fieldset>
    </form>
</section>