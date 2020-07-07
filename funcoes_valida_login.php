 <?php

function valida_login($login, $senha){
    $login_bd = "Admin";
    $senha_bd = "Kvothe1995@.";

    if($login == $login_bd && $senha == $senha_bd){
        return true;
    }

    return false;

}
?>