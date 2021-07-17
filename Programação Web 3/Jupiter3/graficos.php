<!doctype html>

<html lang="pt-br">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">

<head>
  <meta charset="utf-8">

  <title>Jupiter Home</title>

</head>

<body>

  <nav class="navbar navbar-default navbar-expand-lg" id="navbar">
    <div class="container-fluid" id="navbar-content">
      <a class="navbar-brand" href="#">Jupiter</a>
      <button style="width:7% !important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="./images/menu_icon.png" style="width:100%; height: 100%;"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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


  <div class="container-fluid" id="content" style="height:83rem;">
    <center>
      <h1>Nosssas sedes</h1>
    </center>

    <br>

    <center>
      <div id="map" style="height:600px; width:80%;"></div>
    </center>


    <br><br>
    <center>
      <h1>Gráficos da empresa:</h1>
    </center>
    <br><br>

    <center>
      <div class="row">
        <div class="col">
          <div id="age_graphics"></div>
        </div>
        <div class="col">
          <div id="sal_graphics"></div>
        </div>
      </div>
    </center>


    <?php

    include("./conexao.php");
    $statement = null;





    $totalFuncionarios = 0;
    $idade18_26 = 0;
    $idade27_35 = 0;
    $idade36_49 = 0;
    $idade50_more = 0;



    $statement = $pdo->prepare("SELECT COUNT(idfuncionario) FROM tbFuncionario");
    $statement->execute();
    $totalFuncionarios = $statement->fetchColumn(0);


    $statement = $pdo->prepare("SELECT COUNT(idFuncionario) FROM tbFuncionario WHERE idadeFuncionario>=18 AND idadeFuncionario<=26");
    $statement->execute();
    $idade18_26 = $statement->fetchColumn(0);

    $statement = $pdo->prepare("SELECT COUNT(idFuncionario) FROM tbFuncionario WHERE idadeFuncionario>=27 AND idadeFuncionario<=35");
    $statement->execute();
    $idade27_35 = $statement->fetchColumn(0);

    $statement = $pdo->prepare("SELECT COUNT(idFuncionario) FROM tbFuncionario WHERE idadeFuncionario>=36 AND idadeFuncionario<=49");
    $statement->execute();
    $idade36_49 = $statement->fetchColumn(0);

    $statement = $pdo->prepare("SELECT COUNT(idFuncionario) FROM tbFuncionario WHERE idadeFuncionario>=50");
    $statement->execute();
    $idade50_more = $statement->fetchColumn(0);




    $media_salario = 0;
    $sal2000 = 0;
    $sal4000 = 0;
    $sal5500 = 0;
    $sal8000 = 0;
    $sal13000 = 0;

    $statement = $pdo->prepare("SELECT AVG(salariofuncionario) FROM tbfuncionario");
    $statement->execute();
    $media_salario = $statement->fetchColumn(0);

    $statement = $pdo->prepare("SELECT COUNT(idFuncionario) FROM tbfuncionario WHERE salarioFuncionario>=2000 AND salarioFuncionario<4000");
    $statement->execute();
    $sal2000 = $statement->fetchColumn(0);

    $statement = $pdo->prepare("SELECT COUNT(idFuncionario) FROM tbfuncionario WHERE salarioFuncionario>=4000 AND salarioFuncionario<5500");
    $statement->execute();
    $sal4000 = $statement->fetchColumn(0);

    $statement = $pdo->prepare("SELECT COUNT(idFuncionario) FROM tbfuncionario WHERE salarioFuncionario>=5500 AND salarioFuncionario<8000");
    $statement->execute();
    $sal5500 = $statement->fetchColumn(0);

    $statement = $pdo->prepare("SELECT COUNT(idFuncionario) FROM tbfuncionario WHERE salarioFuncionario>=8000 AND salarioFuncionario<13000");
    $statement->execute();
    $sal8000 = $statement->fetchColumn(0);

    $statement = $pdo->prepare("SELECT COUNT(idFuncionario) FROM tbfuncionario WHERE salarioFuncionario>=13000");
    $statement->execute();
    $sal13000 = $statement->fetchColumn(0);




    #print('<h1 style="color:aliceblue;">'.$totalFuncionarios.'</h1>');
    #print('<h1 style="color:aliceblue;">'.$idade18_26.'</h1>');






    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      //gráfico de idade

      var total_funcionarios = parseInt(<?php print($totalFuncionarios); ?>);

      class Graphic {


        static load_age_graphic() {


          if (total_funcionarios > 0) {
            google.charts.load('current', {
              'packages': ['corechart']
            });

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

              // Create the data table.
              var data = new google.visualization.DataTable();
              data.addColumn('string', 'Topping');
              data.addColumn('number', 'Slices');
              data.addRows([
                ['18-26 anos', <?php print($idade18_26); ?>],
                ['27-35 anos', <?php print($idade27_35); ?>],
                ['36-49 anos', <?php print($idade36_49); ?>],
                ['mais que 50 anos', <?php print($idade50_more); ?>],
              ]);

              // Set chart options
              var options = {
                'title': 'Idade de nossos funcionários',
                'width': 600,
                'height': 400
              };

              // Instantiate and draw our chart, passing in some options.
              var chart = new google.visualization.PieChart(document.getElementById('age_graphics'));
              chart.draw(data, options);
            }
          } else {
            alert("Não há funcionários!");
          }

        }






        //gráfico de salário

        static load_sal_graphic() {

          if (total_funcionarios > 0) {
            google.charts.load('current', {
              'packages': ['corechart']
            });

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

              // Create the data table.
              var data = new google.visualization.DataTable();
              data.addColumn('string', 'Topping');
              data.addColumn('number', 'Quantidade');
              data.addRows([
                ['R$2000,00 ou mais', <?php print($sal2000); ?>],
                ['R$4000,00 ou mais', <?php print($sal4000); ?>],
                ['R$5500,00 ou mais', <?php print($sal5500); ?>],
                ['R$8000,00 ou mais', <?php print($sal8000); ?>],
                ['R$13000,00 ou mais', <?php print($sal13000); ?>],
              ]);

              // Instantiate and draw our chart, passing in some options.
              var barchart_options = {
                title: 'Salário médio da empresa: R$<?php print($media_salario); ?>',
                width: 600,
                height: 400,
                legend: 'none'
              };
              var barchart = new google.visualization.BarChart(document.getElementById('sal_graphics'));
              barchart.draw(data, barchart_options);






            }
          }
        }
      }
      Graphic.load_age_graphic();
      Graphic.load_sal_graphic();
    </script>



  </div>








  <footer class="footer">
    <div class="container">
      <p class="float-left">Jupiter, todos os direitos reservados©</p>
    </div>
  </footer>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAckKLHl-T6HPk2pTVfxrjHXf4yLojpfw&callback=initMap&libraries=&v=weekly" async></script>
  <script src="./js/scripts.js"></script>
  <script src="./js/bootstrap.bundle.js"></script>
</body>

</html>