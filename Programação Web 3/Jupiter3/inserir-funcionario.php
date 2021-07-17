<?php

$id = $_POST['numId'];
$nome = $_POST['txtNome'];
$idade = $_POST['intIdade'];
$email = $_POST['txtEmail'];
$cpf = $_POST['txtCpf'];
$endereco = $_POST['txtEndereco'];
$salario = $_POST['floatSalario'];

include("conexao.php");

try {
    $stmt = $pdo->prepare("INSERT INTO tbfuncionario VALUES(null, '$nome', $idade, '$email', '$cpf', '$endereco', $salario)");
    $stmt->execute();

    $pdo = null;

    header("Location: index.php");
} catch (PDOException $e) {
    print "Erro: " . $e->getMessage();
}