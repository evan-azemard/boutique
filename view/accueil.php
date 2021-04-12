<?php
session_start();
if(isset($_SESSION['id'])){
    echo($_SESSION["rank"]);
    echo "<br>";
    echo $_SESSION['login'];

}else{
    echo '';
}?>





