<!doctype html>

<html lang="pt-br">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">

<head>
    <meta charset="utf-8">

    <title>Jupiter Home</title>

</head>

<body>

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
                <form class="d-flex" method="POST" action="./busca.php">
                    <input class="form-control me-2" type="search" placeholder="Procure um dado pelo nome" aria-label="Search" name="nomeBusca">
                    <button class="btn btn-outline-warning" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="content" style="height:53rem;">
        <center>
            <h1>Resultados da pesquisa via Nome</h1>
        </center>

        <br> <br>
        <img src="./images/Jupiter.png" style="position:absolute; opacity: 0.3; left:12%; width:50%;">
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')
                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }
                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        </script>
        <center>
            <table class="table table-dark" style="color:aliceblue;">
                <thread>
                    <tr>
                        <th class="table-dark">#</td>
                        <th class="table-dark">Nome</td>
                        <th class="table-dark">Idade</td>
                        <th class="table-dark">Email</td>
                        <th class="table-dark">CPF</td>
                        <th class="table-dark">Endereço</td>
                        <th class="table-dark">Salário</td>
                        <th class="table-dark">Opções</td>
                    </tr>
                </thread>
                <tbody>
                    <?php
                    include("conexao.php");
                    if (isset($_POST['nomeBusca'])) {
                        $nome = $_POST['nomeBusca'];
                        if ($nome != null || $nome != "") {


                            try {
                                $stmt = $pdo->prepare("SELECT * FROM tbFuncionario WHERE nomeFuncionario LIKE '%$nome%'");
                                $stmt->execute();
                                while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                                    print "<tr>";
                                    print "<td> $row[idFuncionario] </td>";
                                    print "<td> $row[nomeFuncionario] </td>";
                                    print "<td> $row[idadeFuncionario] </td>";
                                    print "<td> $row[emailFuncionario] </td>";
                                    print "<td> $row[cpfFuncionario] </td>";
                                    print "<td> $row[enderecoFuncionario] </td>";
                                    print "<td>R$$row[salarioFuncionario] </td>";
                                    print "<td> <a href='excluir-funcionario.php?id=" . $row['idFuncionario'] . "' class='btn btn-outline-danger'>Excluir</a>";
                                    print "</tr>";
                                }
                            } catch (PDOException $e) {
                                print "Erro: " . $e->getMessage();
                            }
                        }
                    } else {
                        header("location: ./index.php");
                    }
                    ?>
                </tbody>
            </table>
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