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
<section>
    <div class="CardArticle">
        <h1><?= $_SESSION['marque'] ?></h1>
        <h1><?= $_SESSION['nom'] ?></h1>
        <p><?= $_SESSION['resum'] ?></p>
    </div>
</section>