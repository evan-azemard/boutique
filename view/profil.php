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
<main id="profil_main">
    <section id="section_profil">
        <form method="POST" id="profil_form">
            <article id="register_form_article1">
                <h2>Profil de Exemple</h2>
            </article>
            <article id="register_form_article2">
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" id="pseudo" required>
                    </div>
                    <div class="register_labput">
                        <label for="téléphone">Téléphone</label>
                        <input type="number" id="téléphone" required>
                    </div>
                </div>
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="password">Password</label>
                        <input type="password" id="password" required>
                    </div>
                    <div class="register_labput">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>
                </div>
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="confirme_password">Confirmer password</label>
                        <input type="password" id="confirme_password" required>
                    </div>
                    <div class="register_labput">
                        <label for="age">Age</label>
                        <input type="number" id="age" required>
                    </div>
                </div>
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" required>
                    </div>
                    <div class="register_labput">
                        <label for="adresse">Adresse compléte</label>
                        <input type="text" id="adresse" required>
                    </div>
                </div>
                <div class="register_form_contient">
                    <div class="register_labput">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" required>
                    </div>
            </article>
            <article id="register_form_article3_button">
                <input type="submit" class="button marg" value="Valider les choix" name="register_submit">
            </article>
        </form>
    </section>
</main>