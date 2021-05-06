<?php
function  article_panier($model)
{

    $bdd =  db_connect();

    $sel = $bdd->prepare('select id_panier from paniers  WHERE id_user = ? limit 1');
    $sel->execute(array($model));
    $articles = $sel->execute();
    return $articles;

}

function  article_pp($id)
{

    $bdd =  db_connect();

    $sel = $bdd->prepare('select id_produit  from paniers  WHERE id_panier IN (?)');
    $sel->execute(array($id));
    $articles_pp = $sel->fetch();
    /*    var_dump($articles_pp);*/
    ?>
<pre>
<?php
/*var_dump($articles_pp);*/
?>
</pre>
<?php
    return $articles_pp;
}

/*Sélédctionner 1 fois la marque*/
function  select_all($data)
{
    $bdd =  db_connect();
    $sel = $bdd->prepare('select * from articles WHERE id_produit IN ('.implode(',',$data).') ');
    $sel->execute(array());
    $select_all = $sel->fetch();
    return $select_all;
}




function test($data){
    $bdd =  db_connect();

    $products = $bdd->query('SELECT id_panier FROM paniers WHERE id_panier = ($data');
    var_dump($products);
}