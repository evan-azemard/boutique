<!--Afficher article prècis-->
<?php
if ($_GET['id']) {
    $user = new C_article();
    $errors = $user->article($_GET['id']);
}else{
    $errors = array();
}
?>
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
                    <p><?= $_SESSION['resum'] ?></p>
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
                <p>marque du model</p>
                <p class="des"><?= $_SESSION['marque'] ?></p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>nom du model</p>
                <p class="des"><?= $_SESSION['nom'] ?></p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>systeme</p>
                <p class="des">2</p>
            </div>
            <div class="art_section2_1_ligne">
                 <p>puce graphique</p>
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
                 <p>frequence du processeur</p>
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
    <div class="traimoyen"></div>
    <section id="article_section3">
        <article id="art1_art1">
            <label for="select_art">Donner une notte</label>
        </article>
        <article id="art1_art2">
            <form method="post">
                <select id="select_art">
                    <option value="1">* très mauvais</option>
                    <option value="2">** mauvais</option>
                    <option value="3">*** bon</option>
                    <option value="4">**** très bon</option>
                </select>
            </form>
        </article>
        <article id="art1_art3">
            <p>La notte de cette article est de  <span id="artcouleurgrs">90/100</span></p>
        </article>
    </section>
</main>

<!--









