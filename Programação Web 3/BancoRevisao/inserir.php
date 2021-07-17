<?php

    $nome = $_POST['txtNomeUsuario'];
    $email = $_POST['emailUsuario'];
    $assunto = $_POST['assuntoMsg'];
    $mensagem = $_POST['txtMensagem'];

    include("conexao.php");

    try {
        $stmt = $pdo->prepare("INSERT INTO tbMensagem VALUES(null, '$nome', '$email', '$assunto', '$mensagem')");
        $stmt ->execute();

        $pdo = null;

        header("location:index.php");
    } catch (PDOException $e) {
        echo "Erro: ".$e->getMessage();
    }

?>