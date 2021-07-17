<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];

    $media = ($n1 + $n2 + $n3 + $n4)/4;

    print('<br>A média do aluno é de '.$media);
    if ($media > 0 && $media < 4.9){
        print('<br> Aluno retido');
    }else if ($media > 5 && $media < 6.9) {
        print('<br> Aluno em exame');
    }else if ($media > 7 && $media < 10){
        print('<br> Aluno Promovido');
    }else {
        print('<br> Valores Incorretos, tente novamente');
    }
?>