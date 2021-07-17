<?php 

    $user = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];

    if($user == "adm" && $senha=="1234"){
        session_start();
        $_SESSION['nomeUser'] == $user;
        $_SESSION['senhaUser'] == $senha;
        header("location: home.php");
    }



















?>