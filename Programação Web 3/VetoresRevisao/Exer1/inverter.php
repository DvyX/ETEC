<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $num4 = $_GET['num4'];

    $vetor = array($num1, $num2, $num3, $num4);
    $vetor2 = array();
    printf('<br>Vetor padrão: ');
    for ($i = 0; $i < count($vetor); $i++){
        printf($vetor[$i].', ');
    }
    for ($i=0; $i < count($vetor); $i++) { 
        $vetor2[$i] = $vetor[count($vetor) - $i - 1];
    }
    printf('<br>Vetor Invertido:');
    for ($i = 0; $i < count($vetor); $i++){
        printf($vetor2[$i].', ');
    }
?>