<?php
    $salarioAtual = $_POST['txtSalario'];
    $departamento = $_POST['rdDepartamento'];

    if ($departamento == 'Operacional') {
        $salarioAumento = $salarioAtual+ ($salario*15)/100;
        print('<br>O salário passará a ser: '.$salarioAumento);
    }else if ($departamento == 'Desenvolvimento') {
        if ($salarioAtual >= 1500 && $salarioAtual < 1750) {
            $salarioAumento = $salarioAtual+ ($salarioAtual*12)/100;
            print('<br>O salário passará a ser: '.$salarioAumento);
        }elseif ($salarioAtual >= 1750 && $salarioAtual < 2000) {
            $salarioAumento = $salarioAtual+ ($salarioAtual*10)/100;
            print('<br>O salário passará a ser: '.$salarioAumento);
        }elseif ($salarioAtual >= 2000 && $salarioAtual < 3000) {
            $salarioAumento = $salarioAtual+ ($salarioAtual*17)/100;
            print('<br>O salário passará a ser: '.$salarioAumento);
        }elseif ($salarioAtual > 3000) {
            $salarioAumento = $salarioAtual+ ($salarioAtual*5)/100;
            print('<br>O salário passará a ser: '.$salarioAumento);
        }
    }
?>