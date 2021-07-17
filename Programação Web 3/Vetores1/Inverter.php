<?php
    $vetor = array(rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10));
    printf('Vetor Normal: ');
    foreach ($vetor as $i => $value) {
        print_r($vetor[$i].', ');
    }
    for($i = 0; $i < count($vetor); $i ++) {
        $vetor2[$i] = $vetor[count($vetor) - 1 - $i];
    }
    printf('<br> Vetor Invertido: ');
    for($i = 0; $i < count($vetor); $i ++) {
        print_r($vetor2[$i].', ');
    }
?>