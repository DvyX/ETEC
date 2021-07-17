<?php
    $numerolimite = $_GET['txtNumero'];
    $numero1 = 1;
    $numero2 = 1;
    $resultado = 0;
    echo($numero1.",");
    echo($numero2.",");
    while($resultado<$numerolimite){
        $resultado = $numero1 + $numero2;
        $numero2 = $numero1;
        $numero1 = $resultado;
        if($resultado<$numerolimite){
            echo($resultado.",");
        }
    }
?>