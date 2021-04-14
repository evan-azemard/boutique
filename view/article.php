<!--Afficher article prècis-->
<?php
/*if ($_GET['id']) {
    $user = new C_article();
    $errors = $user->article($_GET['id']);
}else{
    $errors = array();
}
*/?>
<?php include 'error.php'; ?>



<main id="article_main">
    <section id="article_section1">
        <div id="art_section1_article1">
            <article id="art_sec1_art1_img">
                <img id="art1_img" src="img_docs/exemple.png.jpg">
            </article>
            <article id="art_sec1_art1_txt">
                <div id="art1_texth1">
                    <h1>LG WING</h1>
                </div>
                <div id="art1_textp">
                    <p>Le LG Wing est un smartphone annoncé le 14
                        septembre 2020 qui possède un écran rotatif
                        (de 6.8 pouces poled)
                        laissant apparaître un deuxième écran de 3.9
                        pouces goled.</p>
                </div>
            </article>
        </div>
        <div id="art_section1_article3">
            <div id="art_section1_art3_info1" class="article_info">
                <h3>Vendu par <span id="art_info_vendeur">Eliozitop</span></h3>
            </div>
            <div id="art_section1_art3_info2" class="article_info">
                <form method="post" id="form_art_grid">
                    <label for="art_number">ajouter au panier</label>
                    <input id="art_number" type="number" min="1" value="1" max="500">
                </form>
            </div>
            <div id="art_section1_art3_info3" class="article_info">
                <p><span id="chiffre_art_info3">50</span> en stock</p>
            </div>
            <div id="art_section1_art3_info4" class="article_info">
                <p>prix unitaire <span id="art_prix">715 €</span></p>
            </div>
        </div>
    </section>
    <section id="article_section2">
        <article id="art_section2_1">
            <div class="art_section2_1_ligne">
                <p>marque_model	</p>
                <p class="des">#E7EDF0#E7EDF0#E7EDF0#E7EDF0#E7E</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>nom_model</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>systeme</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>puce_graphique</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>batterie</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>nombre de capteur</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>qualitée photo principal</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>qualitée vidéo principal</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>type d'écran</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>resolution d'écran</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>definition d'écran</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>Fréquence de l'écran</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>nombre de coeur</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>interface utilisateur</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>memoire flash</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>ram</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>memoire flash</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>DAS</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>frequence du processeur	</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>processeur</p>
                <p class="des">2</p>
            </div>
             <div class="art_section2_1_ligne">
                 <p>taile de la gravure</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>taile</p>
                <p class="des">2</p>
            </div>
        </article>
        <article id="art_section2_2">
            <p>
                L’écran principal de l’appareil est en 6,8″ Full HD OLED tandis que l’écran
                secondaire mesure 3,9″, également OLED. La principale utilité de ce double écran
                réside dans la possibilité de travailler sur deux choses en même temps. Ainsi,
                vous pouvez regarder une vidéo sur l’écran principal pendant que vous parcourez
                un site web sur celui du dessous.
                Il est également possible de suivre un itinéraire GPS tout en gardant un œil sur
                une conversation téléphonique ou écrite.

                L’autre atout majeur qu’ont vanté à de nombreuses reprises les intervenants lors de
                la présentation est sa prise d’images. Le LG Wing proposera une caméra
                arrière de 64 MP en ultra-haute résolution, avec objectifs grand angle.
                La caméra avant sera quant à elle rétractable et montera à du 32 MP.
                Là où les développeurs du smartphone ont été astucieux, c’est dans
                l’alliance entre l’appareil photo et le design original du Wing.
            </p>
        </article>
    </section>
    <section id="article_section3">
        <p>3</p>
    </section>
</main>

<!--









        <h1><?/*= $_SESSION['marque'] */?></h1>
        <h1><?/*= $_SESSION['nom'] */?></h1>
        <p><?/*= $_SESSION['resum'] */?></p>-->