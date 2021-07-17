<?php
require_once("cliente.php");

    $nome = $_POST['txtNome'];
    $rg = $_POST['txtRG'];
    $cpf = $_POST['txtCPF'];

    $cliente = new Cliente(); 

    $cliente->setNome($nome);
    $cliente->setRg($rg);
    $cliente->setCpf($cpf);

    $cliente->toString();

?>