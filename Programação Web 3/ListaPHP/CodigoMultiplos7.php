<?php

    $numero = $_GET['txtNumero'];
    $multiplos = 0;
    for($i=1;$i<=$numero;$i++){
        if($numero%$i==0){
            $multiplos = $multiplos+1;
            echo("<center>".$i." é multiplo de ".$numero."<br></center>");
        }
    }
    echo("<br><center>O Número ".$numero." tem ".$multiplos." multiplos</center>");

?>