<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="https://thediamondcasinoandresort.com/rockstar_games/meta/img/icons/gtaonlinecasino/favicon.ico">
        <title>Diamond Casino & Resort</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
    <div class="container-fluid" style="
    background-size:100% !important; position:relative; float:right; width:100.0% !important;">
    <nav class="navbar navbar-expand-md navbar-light bg-light" style="background-color:black !important; background-image:url('./images/graygold.gif'); background-size:56.5%; position:relative;width:110%; left:-3%;">
    <a class="navbar-brand" href="#">
    <img src="./images/premiumlogo.png" width="70%" height="100%" loading="lazy">
  </a>
    <div class="collapse navbar-collapse" id="navbarNav" style="font-size:1.2rem !important; font-family:Arial, Helvetica, sans-serif;">
    <ul class="navbar-nav" style="background-color:rgba(00,00,00,0.8505) !important; border-color:gold; border-width:1px; width:100%; height:100px; border-style:double;">
      <li class="nav-item active">
        <a class="nav-link" style="color:gold !important;
    font-family: Lucida Sans Regular !important;"href="#">Ínicio</a>
      </li>
      <li class="nav-item" style="border-color:gold;">
        <a class="nav-link" style="color:gold !important;
    font-family: Lucida Sans Regular !important;" href="#">Afiliação</a>
      </li>
      <li class="nav-item" style="border-color:gold;">
        <a class="nav-link" style="color:gold !important;
    font-family: Lucida Sans Regular !important;" href="#">Penthouses</a>
      </li>
      <li class="nav-item active" style="border-color:gold;">
        <a class="nav-link" style="color:gold !important;
    font-family: Lucida Sans Regular !important;" href="#">Sobre o Cassino</a>
      </li>
      <li class="nav-item active" style="border-color:gold;">
        <a class="nav-link" style="color:gold !important;
    font-family: Lucida Sans Regular !important;" href="#">Loja do cassino</a>
      </li>
      <li class="nav-item dropdown" style="float:right !important; color:gold !important;"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div style="color:gold !important;"><img src="./images/images.png" width="30" height="30" style="margin-right:10%;"><?php session_start(); print($_SESSION['login-session']);?></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:black !important; color:gold !important;">
          <a class="dropdown-item" href="#" style="color:gold !important;">Informações</a>
          <a class="dropdown-item" href="#" style="color:gold !important;">Saldo</a>
          <a class="dropdown-item" href="#" style="color:gold !important;">Configurações</a>
          <a class="dropdown-item" href="#" style="color:gold !important;">Conta VIP</a>
          <a class="dropdown-item" href="./logout.php" style="color:gold !important;">Sair</a>
</ul>
    </div>
 
</nav>




   <!-- <div style="width: 30rem; height:25.5rem; position:absolute; left:0; top:30%; z-index:5; background-color:rgba(00,00,00,0.655); border-right:purple; border-style:solid; border-color:rgba(FF,FF,FF,0.4); border-radius:2%;">
    <h5 style="opacity:1.0 !important; color:aliceblue; z-index:7; font-size:2.5rem">Bem vindo(a) ao Cassino Diamond & Resort</h5>
    <p class="card-text" style="opacity:1.0 !important; color:aliceblue; z-index:7; font-size:1.8rem; text-decoration:underline;"></p>
    <a href="#" class="card-text" style="opacity:1.0 !important; color:aliceblue; z-index:7; font-size:1.6rem;">Mostre que você sai ganhando, mostre a sua fortuna e se aproveite de sua sorte esbanjada. Brilhe como um diamante, a Diamond Casino tem tudo o que você mais deseja!</a>
</div>
-->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
        <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="./images/diamondLogoPremium.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h4 style="color:gold;">Bem vindo(a) à sua conta VIP!</h4>
        <p style="color:goldenrod;">A Diamond Casino & Resort tem conteúdos especiais só para você!</p>
</div>
    </div>
    <div class="carousel-item">
      <img src="./images/premium1.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h4 style="color:gold;">Acesso exclusivo à todo o Cassino</h4>
        <p style="color:goldenrod;">A Diamond Casino & Resorts possuí áreas que apenas os grandes VIPs possuem acesso! Assista e curta o cassino a partir dos mais luxuoso conforto!</p>
</div>
    </div>
    <div class="carousel-item">
      <img src="./images/premium2.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h4>Acesso à prêmios exclusivos e aumento das chances!</h4>
        <p>Oferecemos carros luxuosos e grandes terrenos, propriedades oficiais da Diamond Casino & Resorts disponíveis para você!</p>
</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div style="width:112% !important; background-color:rgba(00,00,00,0.750) !important; height:450px; position:relative; left:-10%;">


<div class="container" style="position:relative; top:40px; left:3%;">
  <div class="row">
    <div class="col-lg">
    <div class="card" style="width: 18rem; background-color:black; border-color:gold; border-width:1px; border-style:double; border-radius:5%; margin-left:15%;">
  <img src="./images/premium1.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title" style="color:goldenrod; font-family:fantasy;">Promoções e propriedades exclusivas!</h5>
    <p class="card-text" style="color:goldenrod; font-family:arial;">VIPs Possuem acesso a descontos e Penthouses exclusivas!</p>
  </div>
</div>
    </div>
    <div class="col-lg">
    <div class="card" style="width: 18rem; background-color:black; border-color:gold; border-width:1px; border-style:double; border-radius:5%; margin-left:15%;">
  <img src="./images/premium2.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title" style="color:goldenrod; font-family:fantasy;">Ganhe um veículo do pódio já sorteado mensalmente</h5>
    <p class="card-text" style="color:goldenrod; font-family:arial;">Não teve sorte na Lucky Wheel? VIPs podem receber nossos luxuosos veículos do pódio mensalmente! luxo de carteirinha, não?</p>
  </div>
</div>
  </div>
    <div class="col-lg">
    <div class="card" style="width: 18rem; background-color:black; border-color:gold; border-width:1px; border-style:double; border-radius:5%; margin-left:15%;">
  <img src="./images/premium3.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title" style="color:goldenrod; font-family:fantasy;">Compre decorações exclusivas na Diamond Store!</h5>
    <p class="card-text" style="color:goldenrod; font-family:arial;">VIPs têm acesso a área VIP da Diamond Store e podem decorar as propriedades com o mais glamouroso luxo!</p>
  </div>
</div>
    </div>
  </div>

</div>

</div>


<footer class="text-muted" style="background-image:url('./images/diamonds-810x524.jpg'); background-size:100%; width:120%; height:130px !important;position:relative; left:-10%;">
  <div class="container" back-g>
    <img src="./images/premiumLogo.png" style="position:relative; left:-3%; width:20%; height:100px;">
    <p class="float-right">
    <img src="./images/TheDiamondCasino-GTAO-Logo.png" width="200" height="100" loading="lazy">
    </p>
  </div>
</footer>

</div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>