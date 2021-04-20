<!--Ajouter un produit-->
<?php

if(isset($_POST["submit"]))
{
    if (isset($_SESSION['sellers']))
    {
        $user = new C_ajout();
        $errors = $user->ajouter($_POST['nom'], $_POST['resum'], $_POST['marque']);
    } else
    {
        ?> <script> alert('Il faut être vendeur !') </script><?php
    }
} else
{
    $errors = array();
}
?>
<?php include 'error.php'; ?>
<main id="ajout_main">
    <div><h1>Ajouter un article</h1></div>
    <section>
        <form method="post">
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="resum">Résumé :</label>
                    </div>
                    <div class="ajout_2">
                        <textarea id="resum" maxlength="221" required minlength="50"></textarea>
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="description">Description :</label>
                     </div>
                    <div class="ajout_2">
                        <textarea id="description" required maxlength="800" minlength="200"></textarea>
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="systeme">Systeme :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="text" id="systeme">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="interface_utilisateur">Interface_utilisateur :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" id="interface_utilisateur">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="processeur">Processeur :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="text" id="processeur">
                    </div>
                </div>
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="ratio">Ratio taille écran  :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="number" id="ratio">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="luminosite">Luminositée en cd/m2 :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" id="luminosite">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="puce_graphique">Puce graphique :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" id="puce_graphique">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="ram">Ram :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="number" id="ram">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="memoire_flash">Mémoire flash :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" id="memoire_flash">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="dast">DAS tête:</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" required id="dast">
                    </div>
                </div>
                <div class="article_rectangle">
                      <div class="ajout_1">
                         <label for="dastr">DAS tronc:</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" id="dastr">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="dasm">DAS membre :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" id="dasm">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="double_sim">Double sim :</label>
                     </div>
                    <div class="ajout_2">
                        <select id="double_sim">
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="taile">Taile :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" id="taile">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="type_ecran">Type d'écran :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" id="type_ecran">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="definition_ecran">Definition de l'écran :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" id="definition_ecran">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="batterie">Batterie :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" id="batterie">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="nb_capteur">Nombre de capteur :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" id="nb_capteur">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="taile_gravure">Taile de la gravure :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" id="taile_gravure">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="nom_model">Nom du model :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" required id="nom_model">
                    </div>
                </div>
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="marque_model">Marque du model :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="text" required id="marque_model">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="nb_stock">Nombre en stock :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="number" required id="nb_stock">
                    </div>
                </div>
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="prix_article">Prix de l'article :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="number" required id="prix_article">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="image_ajout">Image :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="file" required name="image" id="image_ajout">
                    </div>
                </div>
            </article>
            <div id="div_button_article">
                <input type="submit" id="button_article_div" name="submit" class="button">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" id="button_article_div" value="réinitialiser" name="reset" class="button">
            </div>
        </form>
    </section>
</main>
