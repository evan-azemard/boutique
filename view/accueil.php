<?php
session_start();
if(isset($_SESSION['id'])){
    echo($_SESSION["rank"]);
    echo "<br>";
    echo $_SESSION['login'];

}else{
    echo '';
}?>
<section>
    <h1>Bonjour veuillez me registerer</h1>
    <a href="register">Register</a><br>
    <a href="login">Login</a><br>
    <a href="profil">profil</a><br>
    <a href="disconnect">Disconect</a><br>
    <a href="ajout">Ajouter un article si vous êtes vendeur</a><br>
    <a href="produit">Découvrer nos produits</a><br>
    <a href="article">article</a><br>
</section><br>




