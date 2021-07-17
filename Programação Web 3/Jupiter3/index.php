<!doctype html>

<html lang="pt-br">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">

<head>
  <meta charset="utf-8">

  <title>Jupiter Home</title>

</head>

<body>

  <section>
    <div class="msginsert1" style="display: none;">
      <p class="msginsert"></p>
    </div>
    <div class="msgexcluir1" style="display: none;">
      <p class="msgexcluir"></p>
    </div>
    <div class="msgalt1" style="display: none;">
      <p class="msgalt"></p>
    </div>
  </section>

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
  <div class="container-fluid" id="content" style="height:100%;">
    <center>
      <h1>Jupiter</h1>
    </center>

    <br> <br>
    <img src="./images/Jupiter.png" style="position:absolute; opacity: 0.3; left:12%; width:50%;">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 26rem; background-color:#0F0F0F; border-radius:3rem; border-style:double; border-width:0.8rem; border-color:aliceblue;">
          <div class="card-body">
            <center>
              <h5 class="card-title">Cadastro</h5>
            </center>
            <br>
            <form class="needs-validation" id="form-ajax form-cadastro" novalidate>
              <div class="row g-3">
                <div class="col">
                  <p class="card-text"><label class="form-label">Nome: <input type="text" name="txtNome" id="txtNome" class="form-control" required>
                </div>
                <div class="col">
                  <p class="card-text"><label>Idade: <input type="number" name="intIdade" id="intIdade" class="form-control" required></label></p>
                </div>
              </div>
              <div class="row g-3">
                <div class="col">
                  <p class="card-text"><label>Email: <input type="email" name="txtEmail" id="txtEmail" id="exampleInputEmail1" class="form-control" required></label></p>
                </div>
                <div class="col">
                  <p class="card-text"><label>CPF: <input type="number" name="txtCpf" id="txtCpf" class="form-control" required max="99999999999"></label></p>
                </div>
              </div>
              <div class="row g-3">
                <div class="col">
                  <p class="card-text"><label>Salário: <input type="money_format" name="floatSalario" id="floatSalario" class="form-control" required></label></p>
                </div>
                <div class="col">
                  <p class="card-text"><label>Endereço: <input type="text" name="txtEndereco" id="txtEndereco" class="form-control" required></label></p>
                </div>
              </div>
              <center>
                <p class="card-text"><input type="submit" class="btn btn-outline-success" id="salvar" value="Enviar" style="position:relative; top:1rem;"></p>
              </center>
            </form>

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
          </div>
        </div>
      </div>
      <div class="col" style="border-width:0.8rem; border-radius: 2rem !important; border-color:aliceblue; border-style:double; margin-bottom: 3rem;">
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

            try {
              $stmt = $pdo->prepare("select * from tbFuncionario");
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
                print "<td> <a href='javascript:void(0)' id='$row[idFuncionario]' class='excluir btn btn-outline-danger'>Excluir</a>";
                print "<a href='?
                    id={$row['idFuncionario']}
                    &nome={$row['nomeFuncionario']}
                    &idade={$row['idadeFuncionario']}
                    &email={$row['emailFuncionario']}
                    &cpf={$row['cpfFuncionario']}
                    &endereco={$row['enderecoFuncionario']}
                    &salario={$row['salarioFuncionario']}' class='btn btn-outline-warning'> Alterar </a> </td>";
                print "<br/>";
                print "</tr>";
              }
            } catch (PDOException $e) {
              print "Erro: " . $e->getMessage();
            }
            ?>
          </tbody>
        </table>

        <center>
          <a href="./graficos.php" class="btn btn-outline-primary">Gráficos</a>
          <a href="./dadospdf.php" target="_blank" rel="noreferrer noopener" class="btn btn-outline-primary" style="margin-left: 20px; margin-right: 20px;">Baixar dados</a>
          <a href="./email.php" rel="noreferrer noopener" class="btn btn-outline-primary">Enviar dados via email</a>
          <div style="position:relative; top:1rem; margin-bottom:3rem;">

            <a class="btn btn-warning" data-bs-toggle="collapse" href="#collapseForm" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:10%;">
              Alterar<img src="./images/angle-down.png" style="width:80%; height:2.25rem;">
            </a>
            <div class="collapse" id="collapseForm">
              <div class="card" style="position:relative; top:1rem; width: 26rem; background-color:#0F0F0F; border-radius:3rem; border-style:double; border-width:0.8rem; border-color:aliceblue;">
                <div class="card-body">
                  <center>
                    <h5 class="card-title">Alterar</h5>
                  </center>
                  <form class="needs-validation" id="form-ajax form-update" novalidate>
                  <input type="hidden" name="numId1" id="numId1" value="<?php print @$_GET['id']; ?>">
                    <div class="row g-3">
                      <div class="col">
                        <p class="card-text"><label class="form-label">Nome: <input type="text" name="txtNome1" id="txtNome1" class="form-control" required value="<?php print @$_GET['nome']; ?>">
                      </div>
                      <div class="col">
                        <p class="card-text"><label>Idade: <input type="text" name="intIdade1" id="intIdade1" class="form-control" required value="<?php print @$_GET['idade']; ?>"></label></p>
                      </div>
                    </div>
                    <div class="row g-3">
                      <div class="col">
                        <p class="card-text"><label>Email: <input type="email" name="txtEmail1" id="txtEmail1" class="form-control" required value="<?php print @$_GET['email']; ?>"></label></p>
                      </div>
                      <div class="col">
                        <p class="card-text"><label>CPF: <input type="text" name="txtCpf1" id="txtCpf1" class="form-control" required max="11" value="<?php print @$_GET['cpf']; ?>"></label></p>
                      </div>
                    </div>
                    <div class="row g-3">
                      <div class="col">
                        <p class="card-text"><label>Salário: <input type="text" name="floatSalario1" id="floatSalario1" class="form-control" required value="<?php print @$_GET['salario']; ?>"></label></p>
                      </div>
                      <div class="col">
                        <p class="card-text"><label>Endereço: <input type="text" name="txtEndereco1" id="txtEndereco1" class="form-control" required value="<?php print @$_GET['endereco']; ?>"></label></p>
                      </div>
                    </div>
                    <center>
                      <p class="card-text">
                        <input type="reset" class="bt-cancelar btn btn-outline-warning" id="bt-cancelar" value="Cancelar" style="position:relative; margin-right:1rem;">
                        <input type="submit" class="btn btn-outline-success" id="alterar" value="Alterar" style="position:relative; margin-left:1rem;">
                      </p>
                    </center>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </center>
      </div>
    </div>
  </div>


  <footer class="footer" style="position: relative; bottom:-5%;">
    <div class="container">
      <p class="float-left">Jupiter, todos os direitos reservados©</p>
    </div>
  </footer>


  <script src="./js/scripts.js"></script>
  <script src="./js/bootstrap.bundle.js"></script>
</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

  //Inserção:

  jQuery('#salvar').click(function() {
    var dadosajax = {
      'txtNome': jQuery('#txtNome').val(),
      'intIdade': jQuery('#intIdade').val(),
      'txtEmail': jQuery('#txtEmail').val(),
      'txtCpf': jQuery('#txtCpf').val(),
      'floatSalario': jQuery('#floatSalario').val(),
      'txtEndereco': jQuery('#txtEndereco').val(),
    };

    pageurl = 'inserir-funcionario.php';

    jQuery.ajax({
      url: pageurl,
      data: dadosajax,
      type: 'POST',
      success: function(html) {
        jQuery('.msginsert1').show();
        jQuery('.msginsert').html("Dados inseridos com sucesso");
        jQuery('html body').animate({
          scrollTop: 0
        }, 500);
        jQuery('.msg').fadeOut(3000);

        setTimeout(function() {
          location.href = "index.php";
        }, 3000);
      }
    });
  });

  //Exclusão:

  jQuery('.excluir').click(function() {
    var element = $(this);
    var id = element.attr("id");
    var info = 'id=' + id;
    if (confirm("Tem certeza que deseja excluir esse funcionário?")) {
      $.ajax({
        type: "GET",
        url: "./excluir-funcionario.php?id=" + id,
        data: info,
        success: function() {
          jQuery('.msgexcluir1').show();
          jQuery('.msgexcluir').html("Dados excluidos com sucesso");
          jQuery('html body').animate({
            scrollTop: 0
          }, 500);
          jQuery('.msg').fadeOut(3000);

          setTimeout(function() {
            window.location.reload(1);
          }, 3000);
        }
      });
    }
  });

  //Alteração:

  jQuery('#alterar').click(function() {
    var dadosajax = {
      'numId': jQuery('#numId1').val(),
      'txtNome': jQuery('#txtNome1').val(),
      'intIdade': jQuery('#intIdade1').val(),
      'txtEmail': jQuery('#txtEmail1').val(),
      'txtCpf': jQuery('#txtCpf1').val(),
      'floatSalario': jQuery('#floatSalario1').val(),
      'txtEndereco': jQuery('#txtEndereco1').val(),
    };

    pageurl = 'alterar-funcionario.php';

    jQuery.ajax({
      url: pageurl,
      data: dadosajax,
      type: 'POST',
      success: function(html) {
        jQuery('.msgalt1').show();
        jQuery('.msgalt').html("Dados alterados com sucesso");
        jQuery('html body').animate({
          scrollTop: 0
        }, 500);
        jQuery('.msg').fadeOut(3000);

        setTimeout(function() {
          location.href = "index.php";
        }, 3000);
      }
    });
  });



  //Cancelar
  jQuery('.bt-cancelar').click(function() {
    location.href = "index.php";
  });

  jQuery('#form-ajax').on('submit', function(e) {
    e.preventDefault();
  });
</script>