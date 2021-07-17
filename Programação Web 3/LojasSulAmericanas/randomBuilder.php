<?php
include_once 'construct.php';

class Builder
{

  function GeneralBuilder($number)
  {
    $BuilderConstruct = new Construct;

    $vetNome = array(
      "Geladeira TV",
      "Churrasqueira Elétrica",
      "Cooktop Reto",

      "Monitor 360hz",
      "XboxSeriesX",
      "PS5",

      "Régua",
      "Tesoura",
      "Papel",

      "Attack On Titan",
      "Estrelas Tortas",
      "Livro Linguagem C"
    );


    $vetPreco = array(
      "R$ 5000,00",
      "R$ 2999,99",
      "R$ 2599,99",

      "R$ 7015,99",
      "R$ 1800,00",
      "R$ 19000,99",

      "R$ 2,00",
      "R$ 3,00",
      "R$ 0,15",

      "R$ 30,00",
      "R$ 25,00",
      "R$ 40,00"
    );


    $vetUrl = array(
      "./img/Geladeira-TV.jpg",
      "./img/Churrasqueira-Eletrica.png",
      "./img/Cooktop-reto.png",

      "./img/Monitor360hz.jpg",
      "./img/XboxSeriesX.jpg",
      "./img/ps5.jpg",

      "./img/Regua.jpg",
      "./img/tesoura.png",
      "./img/Papel.jpg",

      "./img/AttackOnTitan.jpg",
      "./img/torta.jpg",
      "./img/c.jpg"
    );


    $confirm = array();

    $rand = rand(0, 11);
    $confirm[0] = $rand;

    for ($i = 1; $i < 12;) {
      if (in_array($rand, $confirm)) {
        $rand = rand(0, 11);
      } else {
        $confirm[$i] = $rand;
        $i++;
      }
    }
    switch ($number) {
      case "0":
        print('<div class="container" style="position:relative; width:100%; left:5%; top:100px;">');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[0]], $vetPreco[$confirm[0]], $vetUrl[$confirm[0]]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[1]], $vetPreco[$confirm[1]], $vetUrl[$confirm[1]]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[2]], $vetPreco[$confirm[2]], $vetUrl[$confirm[2]]);
        print('</div>');
        print('</div>');

        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[3]], $vetPreco[$confirm[3]], $vetUrl[$confirm[3]]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[4]], $vetPreco[$confirm[4]], $vetUrl[$confirm[4]]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[5]], $vetPreco[$confirm[5]], $vetUrl[$confirm[5]]);
        print('</div>');
        print('</div>');

        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[6]], $vetPreco[$confirm[6]], $vetUrl[$confirm[6]]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[7]], $vetPreco[$confirm[7]], $vetUrl[$confirm[7]]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[8]], $vetPreco[$confirm[8]], $vetUrl[$confirm[8]]);
        print('</div>');
        print('</div>');

        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[9]], $vetPreco[$confirm[9]], $vetUrl[$confirm[9]]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[10]], $vetPreco[$confirm[10]], $vetUrl[$confirm[10]]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[$confirm[11]], $vetPreco[$confirm[11]], $vetUrl[$confirm[11]]);
        print('</div>');
        print('</div>');


        print('</div>');

        break;

      case "1":
        print('<div class="container" style="position:relative; width:100%; left:5%; top:100px;">');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[0], $vetPreco[0], $vetUrl[0]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[1], $vetPreco[1], $vetUrl[1]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[2], $vetPreco[2], $vetUrl[2]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[3], $vetPreco[3], $vetUrl[3]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[4], $vetPreco[4], $vetUrl[4]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[5], $vetPreco[5], $vetUrl[5]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[6], $vetPreco[6], $vetUrl[6]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[7], $vetPreco[7], $vetUrl[7]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[8], $vetPreco[8], $vetUrl[8]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[9], $vetPreco[9], $vetUrl[9]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[10], $vetPreco[10], $vetUrl[10]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[11], $vetPreco[11], $vetUrl[11]);
        print('</div>');
        print('</div>');
        print('</div>');


        break;

      case "2":
        print('<div class="container" style="position:relative; width:100%; left:5%; top:100px;">');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[3], $vetPreco[3], $vetUrl[3]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[4], $vetPreco[4], $vetUrl[4]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[5], $vetPreco[5], $vetUrl[5]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[0], $vetPreco[0], $vetUrl[0]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[1], $vetPreco[1], $vetUrl[1]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[2], $vetPreco[2], $vetUrl[2]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[6], $vetPreco[6], $vetUrl[6]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[7], $vetPreco[7], $vetUrl[7]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[8], $vetPreco[8], $vetUrl[8]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[9], $vetPreco[9], $vetUrl[9]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[10], $vetPreco[10], $vetUrl[10]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[11], $vetPreco[11], $vetUrl[11]);
        print('</div>');
        print('</div>');
        print('</div>');
        break;

      case "3":
        print('<div class="container" style="position:relative; width:100%; left:5%; top:100px;">');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[6], $vetPreco[6], $vetUrl[6]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[7], $vetPreco[7], $vetUrl[7]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[8], $vetPreco[8], $vetUrl[8]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[0], $vetPreco[0], $vetUrl[0]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[1], $vetPreco[1], $vetUrl[1]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[2], $vetPreco[2], $vetUrl[2]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[3], $vetPreco[3], $vetUrl[3]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[4], $vetPreco[4], $vetUrl[4]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[5], $vetPreco[5], $vetUrl[5]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[9], $vetPreco[9], $vetUrl[9]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[10], $vetPreco[10], $vetUrl[10]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[11], $vetPreco[11], $vetUrl[11]);
        print('</div>');
        print('</div>');

        print('</div>');
        break;
      case "4":
        print('<div class="container" style="position:relative; width:100%; left:5%; top:100px;">');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[9], $vetPreco[9], $vetUrl[9]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[10], $vetPreco[10], $vetUrl[10]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[11], $vetPreco[11], $vetUrl[11]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[3], $vetPreco[3], $vetUrl[3]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[4], $vetPreco[4], $vetUrl[4]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[5], $vetPreco[5], $vetUrl[5]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[0], $vetPreco[0], $vetUrl[0]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[1], $vetPreco[1], $vetUrl[1]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[2], $vetPreco[2], $vetUrl[2]);
        print('</div>');
        print('</div>');
        print('<div class="row" style="margin-top:50px;">');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[6], $vetPreco[6], $vetUrl[6]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[7], $vetPreco[7], $vetUrl[7]);
        print('</div>');
        print('<div class="col-sm">');
        print $BuilderConstruct->Builder($vetNome[8], $vetPreco[8], $vetUrl[8]);
        print('</div>');
        print('</div>');
        print('</div>');
        break;
    }
  }
}
