<?php
    $vetor = array(rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10));
    printf('Vetor Normal: ');
    foreach ($vetor as $i => $value) {
        print_r($vetor[$i].', ');
    }
    for($j = 0; $j < count($vetor); $j ++) {
        for($i = 0; $i < count($vetor)-1; $i ++){
            if($vetor[$i] < $vetor[$i+1]) {
                $n = $vetor[$i+1];
                $vetor[$i+1]=$vetor[$i];
                $vetor[$i]=$n;
            }
        }
    }
    printf('<br>Vetor Decrescente: ');
    foreach ($vetor as $i => $value) {
        print_r($vetor[$i].', ');
    }
?>