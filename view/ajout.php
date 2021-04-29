<!--Ajouter un produit-->
<?php

if(isset($_POST["submit"]))
{
    if (isset($_SESSION['rank']))
    {
        if (!empty($_FILES))
        {
            $img = $_FILES["imageplod"];
            $pst = $_POST;
            $user = new C_ajout();
            $errors = $user->ajouter($img['name'],$img['size'],$img['type'],file_get_contents($img['tmp_name']),
            $pst['resum'],$pst['description'],$pst['systeme'],$pst['interface_utilisateur'],
            $pst['ratio'],$pst['luminosite'],$pst['puce_graphique'],$pst['ram'],
            $pst['memoire_flash'],$pst['dast'],$pst['dastr'],$pst['dasm'],$pst['double_sim'],
            $pst['taile'],$pst['type_ecran'],$pst['definition_ecran'],$pst['batterie'],
            $pst['nb_capteur'],$pst['taile_gravure'],$pst['nom'],$pst['marque'],$pst['number'],$pst['prix'],$_SESSION['id'],
            $pst['resolution_ecran']);
        }
    } else
    {
        ?> <script> alert('Il faut être vendeur !') </script><?php
    }
} else
{
    $errors = array();
}
?>
<main id="ajout_main">
    <div><h1>Ajouter un article</h1></div>
<?php include 'error.php'; ?>
    <section>
        <form method="post" enctype="multipart/form-data">
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="resum">Résumé :</label>
                    </div>
                    <div class="ajout_2">
                        <textarea id="resum" name="resum" maxlength="221"  minlength="50"></textarea>
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="description">Description :</label>
                     </div>
                    <div class="ajout_2">
                        <textarea id="description" name="description"  maxlength="800" minlength="200"></textarea>
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="systeme">Systeme :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="text" name="systeme" id="systeme">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="interface_utilisateur">Interface_utilisateur :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" name="interface_utilisateur" id="interface_utilisateur">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="resolution_ecran">Resolution_ecran :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="text" name="resolution_ecran" id="resolution_ecran">
                    </div>
                </div>
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="ratio">Ratio taille écran  :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="number" name="ratio" id="ratio">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="luminosite">Luminositée en cd/m2 :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" name="luminosite" id="luminosite">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="puce_graphique">Puce graphique :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text"  name="puce_graphique" id="puce_graphique">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="ram">Ram :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="number" name="ram" id="ram">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="memoire_flash">Mémoire flash :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" name="memoire_flash" id="memoire_flash">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="dast">DAS tête:</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" name="dast"  id="dast">
                    </div>
                </div>
                <div class="article_rectangle">
                      <div class="ajout_1">
                         <label for="dastr">DAS tronc:</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" name="dastr" id="dastr">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="dasm">DAS membre :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" name="dasm" id="dasm">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="double_sim">Double sim :</label>
                     </div>
                    <div class="double_sim">
                        <select name="double_sim" id="double_sim">
                            <option name="double_sim" value="oui">Oui</option>
                            <option name="double_sim" value="non">Non</option>
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
                        <input type="text" name="taile" id="taile">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="type_ecran">Type d'écran :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text"  name="type_ecran" id="type_ecran">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="definition_ecran">Definition de l'écran :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" name="definition_ecran" id="definition_ecran">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="batterie">Batterie :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" name="batterie" id="batterie">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="nb_capteur">Nombre de capteur :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" name="nb_capteur" id="nb_capteur">
                    </div>
                </div>
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="taile_gravure">Taile de la gravure :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="number" name="taile_gravure" id="taile_gravure">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                     <div class="ajout_1">
                         <label for="nom_model">Nom du model :</label>
                     </div>
                    <div class="ajout_2">
                        <input type="text" name="nom"  id="nom_model">
                    </div>
                </div>
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="marque_model">Marque du model :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="text" name="marque"  id="marque_model">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="nb_stock">Nombre en stock :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="number" name="number"  id="nb_stock">
                    </div>
                </div>
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="prix_article">Prix de l'article :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="number" name="prix"  id="prix_article">
                    </div>
                </div>
            </article>
            <article class="ajout_article">
                <div class="article_rectangle">
                    <div class="ajout_1">
                        <label for="image_ajout">Image :</label>
                    </div>
                    <div class="ajout_2">
                        <input type="file" required name="imageplod" id="image_ajout">
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




