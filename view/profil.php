<!--Page profil-->
<?php

if(isset($_POST["submit"])){
    $user = new C_profil();
    $errors = $user->Update($_POST['pseudo'],$_POST['tel'],$_POST['password'],$_POST['email'], $_POST['r_password'],$_POST['age'],$_POST['prenom'],$_POST['nom'],$_POST['choix'], $_POST['adresse']);
} else {
    $errors = array();
}
?>
<main id="profil_main">
    <section id="section_profil">
        <form method="POST" id="profil_form">
            <article id="register_form_article1">
                <h2>Profil de <?php echo  $_SESSION["id"] ; ?></h2>
            </article>
            <article id="register_form_article2">
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="pseudo"> Nouveau pseudo</label>
                        <input type="text" minlength="4" name="pseudo" maxlength="12" id="pseudo" required>
                    </div>
                    <div class="register_labput">
                        <label for="téléphone">Nouveau téléphone</label>
                        <div id="telregister"><p>+33</p></div>
                        <input type="number" name="tel" maxlength="9" minlength="9" id="téléphone" required>
                    </div>
                </div>
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="password">Nouveau password</label>
                        <input type="password" name="password" minlength="12" maxlength="40"  id="password" required>
                    </div>
                    <div class="register_labput">
                        <label for="email">Nouveau email</label>
                        <input type="email"  minlength="9" name="email" maxlength="35" id="email" required>
                    </div>
                </div>
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="confirme_password">Confirmer password</label>
                        <input type="password" name="r_password" minlength="12" maxlength="40"   id="confirme_password" required>
                    </div>
                    <div class="register_labput">
                        <label for="age">Modifier âge</label>
                        <input type="number" name="age"  minlength="13" maxlength="115" id="age" required>
                    </div>
                </div>
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="prenom">Modifier prénom</label>
                        <input type="text" name="prenom"  maxlength="12" min="3" id="prenom" required>
                    </div>
                    <div class="register_labput">
                        <label for="adresse">Nouvelle adresse compléte</label>
                        <input type="text" name="adresse" minlength="20" maxlength="80"  id="adresse" required>
                    </div>
                </div>
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="nom">Modifier Nom</label>
                        <input type="text" name="nom" maxlength="15" min="3" id="nom" required>
                    </div>
                </div>
                <div class="register_form_contient" >
                     <div class="register_labput5" style="width: 100%">
                            <p id="labelcompte">Actuelment qu'elle type de comtpe avez-vous ? </p>
                            <label for="choix1">Vendeur</label>
                            <input type="radio" required value="2" name="choix" id="choix1">
                            <label for="choix2">Utilisateur</label>
                            <input type="radio" required value="1"  name="choix" id="choix2">
                        </div>
            </article>
            <article id="register_form_article3_button">
                <input type="submit" class="button marg" value="Valider les choix" name="submit">
            </article>
        </form>
    </section>
</main>