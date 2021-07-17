<?php

    $servidor = "localhost";
    $banco = "bdJupiter";
    $usuario = "root";
    $senha = "";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

?>