<?php
require_once 'obra.php';

try{
    header("Location: selection.php");
    $obra = new Obra();

    $obra -> setNome($_POST['txtNomeObra']);
    $obra -> setTipo($_POST['selectCategoria']);
    $obra -> setPeriodo($_POST['selectPeriodo']);
    $obra -> setNomeAutor($_POST['txtNomeAutor']);

    $basicFilePath = "images/" . $_FILES['imagem']['name'];
    $file = $_FILES['imagem']['tmp_name'];

    move_uploaded_file($file, $basicFilePath);

    $obra -> setUrl($basicFilePath);


    $obra -> InsertObra($obra);
    }catch (Exception $erro){
        echo '<pre>';
            print_r($erro);
        echo '</pre>';
        echo $erro->getMessage();
    }



?>