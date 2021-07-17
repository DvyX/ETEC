<!doctype html>

<html lang="pt-br">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">

<head>
    <meta charset="utf-8">

    <title>Jupiter Home</title>

</head>

<body>
<?php 
    if(isset($_GET['mailSet'])){
        if($_GET['mailSet']){
            $returned = true;
        }
    }
?>
    <script>
        var returned = <?php print($returned);?>;
        if(returned == true){
            alert("Não foi possível enviar o email (Email inválido ou nulo!)");
        }
    </script>

    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid" id="navbar-content">
            <a class="navbar-brand" href="#">Jupiter</a>
            <button style="width:7% !important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><img src="./images/menu_icon.png" style="width:100%; height: 100%;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Funcionário
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./index.php">Lista de Funcionários</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./index.php">Cadastro</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./graficos.php">Gráficos</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="O que você procura?" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="content" style="height:53rem;">
        <center>
            <h1>Jupiter</h1>
        </center>

        <br> <br>
        <img src="./images/Jupiter.png" style="position:absolute; opacity: 0.3; left:12%; width:50%;">

        <center>
            <div class="card" style="top: 200px;width: 26rem; background-color:#0F0F0F; border-radius:3rem; border-style:double; border-width:0.8rem; border-color:aliceblue;">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Enviar dados via email</h5>
                    </center>
                    <form action="./send-mail.php" method="POST" id="form-cadastro">
                        <p class="card-text"><input type="email" name="txtEmail" id="exampleInputEmail1" class="form-control" placeholder="nome@exemplo.com"></p>
                        <center>
                            <p class="card-text"><input type="submit" class="btn btn-outline-success" value="Enviar" style="position:relative; top:1rem;"></p>
                        </center>
                    </form>
                </div>
            </div>
        </center>
    </div>


    <footer class="footer">
        <div class="container">
            <p class="float-left">Jupiter, todos os direitos reservados©</p>
        </div>
    </footer>


    <script src="./js/scripts.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
</body>

</html>