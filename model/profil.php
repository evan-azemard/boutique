<?php

function P_select(){

    $bdd =  db_connect();

    $sel = $bdd->prepare("SELECT * FROM users");
    $sel->execute();

    return $sel;
}

function update($n_login, $hpass, $id){
    $bdd =  db_connect();
    $update = $bdd->prepare('UPDATE users SET pseudo = ?, password = ? WHERE id_user = ?');
    $update->execute(array($n_login, $hpass, $id));
    session_unset();
    header("Location: login");
}