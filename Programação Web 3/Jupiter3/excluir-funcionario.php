<?php

$id = $_GET['id'];

include("conexao.php");

try {
    $stmt = $pdo->prepare("DELETE FROM tbfuncionario WHERE idfuncionario=$id");
    $stmt->execute();

    $pdo = null;

    header("Location: index.php");
} catch (PDOException $e) {
    print "Erro: " . $e->getMessage();
}
