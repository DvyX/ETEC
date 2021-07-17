<?php
    $sim = false;
    session_start();
    $numero = $_GET['numero'];
    $vetor = $_SESSION['$vetor'];
    printf('Vetor: ');
    foreach ($vetor as $i => $value) {
        print_r($vetor[$i].', ');
    }
    printf('<br>');
    for($i = 0; $i < count($vetor); $i ++) {
        if ($numero == $vetor[$i]) {
            $sim = true;
            break;
        }
    }
    if ($sim) {
        printf('O valor '.$numero.' está contido');
    }else {
        printf('O valor '.$numero.' não está contido');
    }
?>