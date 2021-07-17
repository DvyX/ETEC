<?php 
class Construct
{
    public function Builder($nome, $valor, $url)
    {
        print('
        <div class="card" style="width: 12rem; height:20rem; background-color:aliceblue;">
        <img src="'.$url.'" class="card-img-top" style="width:100%; height:60%;">
        <div class="card-body">
          <h5 class="card-title">'.$nome.'</h5>
          <p class="card-text">'.$valor.'</p>
        </div>
      </div>
      ');
    }
}
