<!doctype html>

<html lang="pt-br">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<head>
    <meta charset="utf-8">

    <title>Museu Cybertec - Home</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <html>

    <head>
        <title>Cybertec Museu</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css">

    </head>

    <body class="formBody">
        <br>
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link active" href="home.html">Home</a>
            <a class="nav-item nav-link" href="galeria.php">Galeria</a>
            <a class="nav-item nav-link" href="quemSomos.php">Quem Somos</a>
            <a class="nav-item nav-link" href="contato.php">Contato</a>
            <a class="nav-item nav-link sair" href="logout.php">Sair</a>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form class="globalForms" id="formRegistroObra" name="formRegistroObra" method="POST" action="dataObra.php">

                        <h3>
                            <p class="topicLabelTag">Registro de obra:</p>
                        </h3>
                        <br>
                        <p class="topicLabelTag">Nome da obra:</p>
                        <input type="text" class="textType" id="txtNomeObra" name="txtNomeObra" placeholder="nome da obra">
                        <br>
                        <br>
                        <p class="topicLabelTag">Categoria da obra:</p>
                        <select class="selectType" id="selectCategoria" name="selectCategoria">
                            <option class="selectTypeOption">Pintura</option>
                            <option class="selectTypeOption">Escultura</option>
                            <option class="selectTypeOption">Vitral</option>
                            <option class="selectTypeOption">Outro...</option>
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
                            <option class="selectTypeOption">Outro...</option>
                        </select>
                        <br>
                        <br>
                        <button type="submit" class="buttons" id="btnRegObra" name="btnRegObra">Registrar obra</button>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
                <div class="col-sm">
                    <form class="globalForms" id="formRegistroAutor" name="formRegistroAutor" method="POST" action="dataAutor.php">
                        <h3>
                            <p class="topicLabelTag">Registro de autor:</p>
                        </h3>
                        <br>
                        <p class="topicLabelTag">Nome do autor:</p>
                        <input type="text" class="textType" id="txtNomeAutor" name="txtNomeAutor" placeholder="nome do autor">
                        <br>
                        <br>
                        <p class="topicLabelTag">Nacionalidade do autor:</p>
                        <input type="text" class="textType" id="txtNacionalidade" name="txtNacionalidade" placeholder="nação">
                        <br>
                        <br>
                        <p class="topicLabelTag">Ano de nascimento do autor:</p>
                        <input type="date" class="textType" id="txtAno" name="txtAno" placeholder="ano de nascimento">
                        <br>
                        <br>
                        <p class="topicLabelTag">Ano de falecimento do autor:</p>
                        <input type="date" class="textType" id="txtAnoMorte" name="txtAnoMorte" placeholder="ano de falecimento">
                        <br>
                        <br>
                        <button type="submit" class="buttons" id="btnRegAutor" name="btnRegAutor">Registrar autor</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Conheça mais sobre nós!</a>
                </p>
                <p>℗Museu Cybertec todos os direitos reservados</p>
                <p>Voltar para cima <a href="home.html">home</a> ou <a href="logout.php"> sair</a>.</p>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>

    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>