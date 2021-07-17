<?php
    $base = $_POST['intBase'];
    $expoente = $_POST['intExpoente'];
    $resultado = $base;
    for ($i=1; $i < $expoente ; $i++) { 
        $resultado = $resultado * $base;
    }
    print('<br>O resultado é: '.$resultado)
?>