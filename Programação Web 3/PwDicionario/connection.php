<?php 

    $servidor = "localhost";
    $banco = "bd_dicionary";
    $usuario = "root";
    $senha = "";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

?>
