<!--Ajouter un produit-->
<?php
session_start();
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
<section>
    <form name="ajout" method="post">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required />

        <label for="marque">Marque</label>
        <input type="text" id="marque" name="marque" required />

        <label for="resum">resumer</label>
        <textarea id="resum" name="resum" required></textarea>

        <button class="index__button" type="submit" name="submit" value="submit">Envoyer</button>
    </form>

</section>