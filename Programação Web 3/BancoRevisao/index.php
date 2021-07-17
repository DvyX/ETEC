<!DOCTYPE html>
<html lang="pt-br">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="container-fluid" style="padding: 20px;">
        <div class="row">
            <div class="col-sm">
                <h2>Inserção:</h2>

                <form method="post" action="inserir.php" onsubmit="return validarTudo()">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nome:</label>
                        <input type="text" class="form-control" name="txtNomeUsuario" id="txtNomeUsuario" placeholder="Digite seu nome completo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" name="emailUsuario" id="emailUsuario" aria-describedby="emailHelp" placeholder="o.seu@email.com">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Assunto da mensagem:</label>
                        <input type="text" class="form-control" name="assuntoMsg" id="assuntoMsg" placeholder="Satisfação, Crítica, Elogio, Sujestão">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mensagem:</label>
                        <textarea class="form-control" name="txtMensagem" id="txtMensagem" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-sm" style="margin-left: 5%;">
                <h3 style="margin-bottom: 2%;">Alteração:</h3>
                <br>
                <form method="post" action="alterar.php" style="width: 50%;">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="idAlt" id="idAlt" value="<?php echo @$_GET['id']; ?>" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtNomeUsuarioAlt" id="txtNomeUsuarioAlt" value="<?php echo @$_GET['nome']; ?>" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="emailUsuarioAlt" id="emailUsuarioAlt" value="<?php echo @$_GET['email']; ?>" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="assuntoMsgAlt" id="assuntoMsgAlt" value="<?php echo @$_GET['assunto']; ?>" placeholder="Assunto">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtMensagemAlt" id="txtMensagemAlt" value="<?php echo @$_GET['mensagem']; ?>" placeholder="Mensagem">
                    </div>
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </form>
            </div>
        </div>

        <br><br>
        <h2>Consulta:</h2>
        <div>
            <table class="table table-striped table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Assunto</th>
                        <th scope="col" style="width: 50%;">Mensagem</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include("conexao.php");

                    try {
                        $stmt = $pdo->prepare("select * from tbMensagem");
                        $stmt->execute();

                        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

                            echo "<tr>";
                            echo "<td>$row[idMensagem]</td>";
                            echo "<td>$row[nomeUsuario]</td>";
                            echo "<td>$row[emailUsuario]</td>";
                            echo "<td>$row[assuntoMensagem]</td>";
                            echo "<td>$row[conteudoMensagem]</td>";
                            echo "<td><a href='?id=$row[idMensagem]&nome=$row[nomeUsuario]&email=$row[emailUsuario]&assunto=$row[assuntoMensagem]&mensagem=$row[conteudoMensagem]'>Alterar</a></td>";
                            echo "<td><a href='excluir.php?id=" . $row['idMensagem'] . "'>Excluir</a></td>";
                            echo "</tr>";
                        }
                    } catch (PDOException $e) {
                        echo "Erro: " . $e->getMessage();
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>


    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>

<script>
    function validarNome() {
        var nome = document.getElementById("txtNomeUsuario").value;

        if (nome.length > 2) {
            return true;
        } else {
            return false;
        }
    }

    function validarEmail() {
        var email = document.getElementById("emailUsuario").value;

        if (email.length > 4 && email.search(" ") == -1) {
            return true;
        } else {
            return false;
        }
    }

    function validarAssunto() {
        var assunto = document.getElementById("assuntoMsg").value;

        if (assunto.length > 2 && assunto.length < 11) {
            return true;
        } else {
            return false;
        }
    }

    function validarMensagem() {
        var mensagem = document.getElementById("txtMensagem").value;

        if (mensagem.length > 5) {
            return true;
        } else {
            return false;
        }
    }

    function validarTudo() {
        if (validarNome()) {
            if (validarEmail()) {
                if (validarAssunto()) {
                    if (validarMensagem()) {
                        return true;
                    } else {
                        alert("Erro ao enviar Mensagem (minimo de 6 caracteres), tente novamente")
                        return false;
                    }
                } else {
                    alert("Erro ao enviar Assunto (deve ter entre 3 e 10 caracteres), tente novamente")
                    return false;
                }
            } else {
                alert("Erro ao enviar Email, tente novamente")
                return false;
            }
        } else {
            alert("Erro ao enviar Nome (minimo de 2 caracteres), tente novamente")
            return false;
        }
    }
</script>