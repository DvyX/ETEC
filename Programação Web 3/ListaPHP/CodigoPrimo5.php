<?php

    $numero = $_GET['txtNumero'];
    $foiPossivelDividir = 0;

    for($i=1;$i<=$numero;$i++){
        if($numero%$i==0){
            $foiPossivelDividir=$foiPossivelDividir+1;
        }
    }
    if($foiPossivelDividir==2){
        echo("<center>O número inserido é primo</center>");
    }else{
        echo("<center>O número inserido não é primo</center>");
    }

?>