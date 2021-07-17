<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro obra - teste</title>
</head>
<body>
<form class="globalForms" id="formRegistroObra" name="formRegistroObra" method="POST" action="dataObra.php" enctype="multipart/form-data">

<h3>
    <p class="topicLabelTag">Registro de obra:</p>
</h3>
<br>
<br>
<p class="topicLabelTag">Nome da obra:</p>
<input type="text" class="textType" id="txtNomeObra" name="txtNomeObra" placeholder="nome da obra">
<br>
<br>
<p class="topicLabelTag">Nome do autor:</p>
<input type="text" class="textType" id="txtNomeAutor" name="txtNomeAutor" placeholder="nome do autor">
<br>
<br>
<p class="topicLabelTag">Categoria da obra:</p>
<select class="selectType" id="selectCategoria" name="selectCategoria">
    <option class="selectTypeOption">Pintura</option>
    <option class="selectTypeOption">Escultura</option>
    <option class="selectTypeOption">Vitral</option>
</select>
<br>
<br>
<p class="topicLabelTag">Período da obra:</p>
<select class="selectType" id="selectPeriodo" name="selectPeriodo">
    <option class="selectTypeOption">Renascentismo</option>
    <option class="selectTypeOption">Realismo</option>
    <option class="selectTypeOption">Neoclassicismo</option>
    <option class="selectTypeOption">Impressionismo</option>
    <option class="selectTypeOption">Romantismo</option>
    <option class="selectTypeOption">Expressionismo</option>
    <option class="selectTypeOption">Cubismo</option>
    <option class="selectTypeOption">Barroco</option>
    <option class="selectTypeOption">Modernismo</option>
</select>
<br>
<br>
<p class="topicLabelTag">Imagem da obra:</p>
<input type="file" name="imagem">
<br>
<br>
<button type="submit" class="buttons" id="btnRegObra" name="btnRegObra">Registrar obra</button>
<br>
<br>
<br>
</body>
</html>