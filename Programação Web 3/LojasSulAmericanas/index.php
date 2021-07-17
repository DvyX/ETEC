<?php
include_once "randomBuilder.php";
$builder = new Builder;

if (isset($_COOKIE['codCategoria']) == false) {
  setcookie('codCategoria', 0);
}
?>
<html>

<head>
  <title>Lojas sul americanas</title>
  <link rel="stylesheet" href="css/index.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css.map">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css.map">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css.map">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css.map">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
</head>


<body style="background-color:aliceblue;">





  <div class="fixed-top">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: larger;">
              <p class="text-info">Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: larger;">
              <p class="text-info">Produtos</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: larger;">
              <p class="text-info">Fale conosco</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: larger;">
              <p class="text-info">Compre agora</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <div class="navbar-brand"><img src="./img/download.png" style="width:30px; height:30px">
        <p style="color:lightskyblue; position:relative; font-size:90%; float:right; left:5%">Lojas Sul Americanas</p>
      </div>
      <div class="mx-auto">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </div>
      </button>
    </nav>
  </div>


  <div id="containercolor" style="width:75%; height:200%; background-color:darkcyan; position:absolute; right:30%;">
    <div class="container" style="width:100%; height:100%;" id="produtos">

      <?php
      switch ($_COOKIE['codCategoria']) {
        case "0":
          $builder->GeneralBuilder(0);
          break;
        case "1":
          $builder->GeneralBuilder(1);
          break;
        case "2":
          $builder->GeneralBuilder(2);
          break;
        case "3":
          $builder->GeneralBuilder(3);
          break;
        case "4":
          $builder->GeneralBuilder(4);
          break;
        default:
          $builder->GeneralBuilder(0);
          break;
      }

      ?>
    </div>
  </div>
  </div>

  <div class="back1" style="background-color:aquamarine; width:25%; height:200%; position:relative; left:75%; top:0;">
    <div style="position:relative; top:100px; left:20%; width:20%;">
      <form action="lerCategoria.php" method="post">

        <label>Categoria:</label>
        <br>
        <select name="slCategoria" id="slCategiria">
          <option value="0">Padrão</option>
          <option value="1">Eletrodomésticos</option>
          <option value="2">Eletrônicos</option>
          <option value="3">Papelaria</option>
          <option value="4">Livros</option>
        </select>
        <br>
        <button type="submit">Confirmar</button>
      </form>
    </div>
  </div>

  <div class="container-xl" style="background-color:dimgrey; position:relative; top:10%; height:10%">
    <div class="mx-auto">
      <center>
        <p style="color:lightskyblue; position:relative; top:1.3rem; font-size:140%">Lojas Sul Americanas Todos os direitos reservados ©</p>
      </center>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>