<?php

    $idMensagem = $_GET['id'];

    include("conexao.php");

    try {
        $stmt = $pdo->prepare("DELETE FROM tbMensagem WHERE idMensagem='$idMensagem'");
        $stmt ->execute();

        $pdo = null;

        header("location:index.php");
    } catch (PDOException $e) {
        echo "Erro: ".$e->getMessage();
    }

?>