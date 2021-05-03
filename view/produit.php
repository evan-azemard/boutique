<main id="produit_main">
    <!--Affiche produit par section-->
    <div class="produit_h1 banderole">
        <h1>Découvrer nos smartphones</h1>
    </div>
    <section>
        <article class="articlegrid">
            <?php
            foreach ($articles_model as $tab) {
                $model = $tab['marque_model'];

                $articles = article_produit($model);
            ?>
                <div class="produit_h1">
                    <h1><?= $tab['marque_model'] ?></h1>
                </div>
                <div id="flexcard">
                    <div class="grid">
                        <?php foreach ($articles as $article) { ?>
                            <article class="produit_card">
                                <div class="card_img">
                                    <img src="img_docs/exemple.png.jpg" alt="exemple">
                                </div>
                                <div class="card_description">
                                    <h3><?= $article['nom_model'] ?></h3>
                                    <p><?= $article['resum'] ?></p>
                                </div>
                                <div class="logo_card">
                                <a href="produit?id=<?= $article['id_produit'] ?>"><i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i></a>
                                    <input type="number" class="number" id="number" placeholder="1" min="1" max="500"><label for="number"></label>
                                    <a href="article?id=<?= $article['id_produit'] ?>"><i class="fa fa-info-circle fa-3x" aria-hidden="true"></i></a>
                                    <p>700 €</p>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
                </div>
                <div class="traimoyen"></div>
            <?php
            } ?>
        </article>
    </section>
</main>