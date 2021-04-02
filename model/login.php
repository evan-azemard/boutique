<?php


/*Ce connecter en tant que users ou sellers*/
function F_login($login)
{
    $bdd =  db_connect();

    $sel = $bdd->prepare("select * from users where pseudo=? limit 1");
    $sel->execute(array($login));
    $tab = $sel->fetch();

    return $tab;
}

function F_login2($login)
{
    $bdd =  db_connect();

    $sel = $bdd->prepare("select * from sellers where pseudo=? limit 1");
    $sel->execute(array($login));
    $tab = $sel->fetch();

    return $tab;
}