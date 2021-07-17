<?php
    $nome = $_POST['txtNome'];
    $cpf = $_POST['txtCPF'];
    $anoNascimento = $_POST['anoNascimento'];
    $categoria = $_POST['slcCategoria'];

    echo("<h2> RESULTADO DA CONSULTA </h2>");
    echo("<br>Nome: ".$nome);
    echo("<br>CPF: ".$cpf);
    echo("<br>Ano de Nascimento: ".$anoNascimento);
    if($categoria==1 || $categoria==2){
        if($anoNascimento<=2002){
            echo("<br>Você Pode Tirar a Carteira!");
        } else{
            echo("<br>Você Ainda Não Pode Tirar a Carteira :(<br><Idade Mínima: 18");
        }
    }else {
        if($anoNascimento<=1999){
            echo("<br>Você Pode Tirar a Carteira!");
        } else{
            echo("<br>Você Ainda Não Pode Tirar a Carteira :(<br><Idade Mínima: 21");
        }
    }
    echo("<br>Categoria Selecionada: ".$categoria);

?>