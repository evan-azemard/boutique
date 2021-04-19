<!--Page Register-->
<?php
if(isset($_POST["submit"])){
    $user = new Utilisateurs();
    $errors = $user->Register($_POST['pseudo'],$_POST['tel'],$_POST['password'],$_POST['email'], $_POST['r_password'],$_POST['age'],$_POST['prenom'],$_POST['nom'],$_POST['choix'], $_POST['adresse']);
} else {
    $errors = array();
}

?>

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

        <div class="error_ins2">
                 <?php
            foreach ($errors as $error) {
                echo "<div id='error_ins'>";
                echo "• " . $error . "<br>";
                echo "</div>";
            }
            ?>
        </div>
        <section id="register_section2">
            <form method="post" id="register_form">
                <article id="register_form_article1">
                    <h2>Register</h2>
                </article>
                <article id="register_form_article2">
                    <div class="register_form_contient">
                        <div class="register_labput">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" name="pseudo" id="pseudo" required>
                        </div>
                        <div class="register_labput">
                            <label for="téléphone">Téléphone</label>
                            <input type="number" name="tel"  id="téléphone" required>
                        </div>
                    </div>
                    <div class="register_form_contient">
                        <div class="register_labput">
                            <label for="password">Password</label>
                            <input type="password" name="password"  id="password" required>
                        </div>
                        <div class="register_labput">
                            <label for="email">Email</label>
                            <input type="email" name="email"  id="email" required>
                        </div>
                    </div>
                    <div class="register_form_contient">
                        <div class="register_labput">
                            <label for="confirme_password">Confirmer password</label>
                            <input type="password" name="r_password"  id="confirme_password" required>
                        </div>
                        <div class="register_labput">
                            <label for="age">Age</label>
                            <input type="number" name="age"  id="age" required>
                        </div>
                    </div>
                    <div class="register_form_contient">
                        <div class="register_labput">
                            <label for="prenom">Prénom</label>
                            <input   type="text" name="prenom" id="prenom" required>
                        </div>
                        <div class="register_labput">
                            <label for="adresse">Adresse compléte</label>
                            <input type="text"   name="adresse" id="adresse" required>
                        </div>
                    </div>
                    <div class="register_form_contient">
                        <div class="register_labput">
                            <label for="nom">Nom</label>
                            <input type="text"  name="nom" id="nom" required>
                        </div>
                        <div class="register_labput5">
                            <p id="labelcompte">Type de compte</p>
                            <label for="choix1">Vendeur</label>
                            <input type="radio" required value="2" name="choix" id="choix1">
                            <label for="choix2">Utilisateur</label>
                            <input type="radio" required value="1"  name="choix" id="choix2">
                        </div>
                </article>
                <article id="register_form_article3">
                    <input type="submit" class="button" value="Valider les choix" name="submit">
                </article>
            </form>
        </section>
    </main>
</div>

