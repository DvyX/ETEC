<?php
require_once("registro.php");
require_once("execsql.php");

try{

    $connectExec = new ExecSQL();
    
    $nomeAutor = $_POST['txtNomeAutor'];
    $nacionalidade = $_POST['txtNacionalidade'];
    $dnasc = $_POST['txtAno'];
    $dmorte = $_POST['txtAnoMorte'];
     
    $autor = new Autor();
    $autor -> setNomeA($nomeAutor);
    $autor -> setNacao($nacionalidade);
    $autor -> setDataN($dnasc);
    $autor -> setDataM($dmorte);

    $connectExec -> InsertAutor($autor);

    print("Inserido com sucesso!");
    print("<a href='home.php'><button>Voltar</button></a>");
    }catch (Exception $erro){
        print($erro);
    }



?>