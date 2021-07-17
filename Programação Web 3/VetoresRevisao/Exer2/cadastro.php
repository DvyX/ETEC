<?php

    $nome = $_POST['txtNome'];
    $cpf = $_POST['txtCpf'];
    $dtNasc = $_POST['dtNasc'];
    $rg = $_POST['numRg'];
    $turma = $_POST['slTurma'];

    $vetor = array(
        "nome" => $nome,
        "cpf" => $cpf,
        "dtNasc" => $dtNasc,
        "rg" => $rg,
        "turma" => $turma
    );

    printf('<center><h1> Matricula: </h1></center>');
    print('<h2><div style="margin-left: 10%; border-left-style: solid;">
    Nome: '.$vetor["nome"].'<br>
    Cpf: '.$vetor["cpf"].'<br>
    Data de Nascimento: '.$vetor["dtNasc"].'<br>
    RG: '.$vetor["rg"].'<br>');

    switch ($vetor["turma"]) {
        case 1:
            printf("Turma: 1A</div></h2>");
            break;
        case 2:
            printf("Turma: 1B</div></h2>");
            break;
        case 3:
            printf("Turma: 2A</div></h2>");
            break;
        case 4:
            printf("Turma: 2B</div></h2>");
            break;
        
    }
