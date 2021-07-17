<?php

    $servidor = "localhost";
    $banco = "bdContato";
    $usuario = "root";
    $senha = "";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>