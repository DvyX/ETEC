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
    $stmt = $pdo->prepare("UPDATE tbfuncionario SET 
        nomeFuncionario = '$nome'
        ,idadeFuncionario = $idade
        ,emailFuncionario = '$email'
        ,cpfFuncionario =  $cpf
        ,enderecoFuncionario = '$endereco'
        ,salarioFuncionario = $salario
    WHERE idFuncionario = '$id'");

    $stmt->execute();
    $pdo = null;

    header("Location: index.php");

} catch (PDOException $e) {
    print "Erro: " . $e->getMessage();
}
