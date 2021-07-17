<?php
$login = $_POST['txtlogin'];
$senha = $_POST['txtSenha'];

if (($login == 'adm') && ($senha == '123')) {
    session_start();
    $_SESSION['login-session'] = $login;
    $_SESSION['senha-session'] = $senha;
    header("Location: areaPremium.php");
} else {
    header("Location: index2.php");
}

?>