
<section>
    <a href="accueil">accueil</a>
    <h1>Découvrer nos smartphones</h1>
</section>
<section>
    <aside>Liste des smartphone </aside>
    <article class="articlegrid">
        <?php
        foreach ($articles_model as $tab){
            $model = $tab['marque_model'];

            $articles = article_produit($model);
            ?>
            <h1><?= $tab['marque_model'] ?></h1>
            <div id="flexcard">
                <div class="grid">
                    <?php foreach ($articles as $article){?>
                        <div class="child card">
                            <h2><?= $article['nom_model']?></h2>
                            <h3><?= $article['resum']?></h3>
                            <a href="article?id=<?= $article['id_produit']?>">Voir l'article</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php
        } ?>
    </article>
</section>
