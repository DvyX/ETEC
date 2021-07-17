<?php

class Obra {

   private $nomeObra, $tipoObra, $periodoObra;

   public function Obra(){}
   public function setNome(String $nomeObra){
       $this -> nomeObra = $nomeObra; 
   }
   public function setTipo(String $tipoObra){
       $this -> tipoObra = $tipoObra; 
   }
   public function setPeriodo(String $periodo){
       $this -> periodoObra = $periodo; 
   }
   public function getNome(){
       return $this -> nomeObra;
   }
   public function getTipo(){
       return $this -> tipoObra;
   }
   public function getPeriodo(){
       return $this -> periodoObra; 
   }
   
   public function toString(){}
   
}


class Autor{
   private $nomeAutor, $nacaoAutor, $dataNascm, $dataFalec;

   public function Autor(){}

   public function setNomeA(String $nomeAutor){
        $this -> nomeAutor = $nomeAutor; 
    }
    public function setNacao(String $nacao){
        $this -> nacaoAutor = $nacao; 
    }
    public function setDataN(String $dataN){
        $this -> dataNascm = $dataN; 
    }
    public function setDataM(String $dataM){
        $this -> dataFalec = $dataM; 
    }
    public function getNomeA(){
        return $this -> nomeAutor;
    }
    public function getNacao(){
        return $this -> nacaoAutor;
    }
    public function getDataN(){
        return $this -> dataNascm;
    }
    public function getDataM(){
        return $this -> dataFalec;
    }
    public function toString(){}
}




?>