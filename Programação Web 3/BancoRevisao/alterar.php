<?php

    require("conexao.php");

    $id = $_POST['idAlt'];
    $nome = $_POST['txtNomeUsuarioAlt'];
    $email = $_POST['emailUsuarioAlt'];
    $assunto = $_POST['assuntoMsgAlt'];
    $mensagem = $_POST['txtMensagemAlt'];

    try {
        $stmt = $pdo -> prepare("UPDATE tbMensagem SET nomeUsuario='$nome', emailUsuario='$email', assuntoMensagem='$assunto', conteudoMensagem='$mensagem' WHERE idMensagem='$id'");
        $stmt -> execute();

        echo "<script> alert('Dados alterados com sucesso'); </script>";
        echo "<script> window.location = 'index.php'; </script>";

    } catch (PDOException $e) {
        echo "Erro: ".$e->getMessage();
    }
    
?>