<?php

class Obra {

   private $id, $nomeObra, $tipoObra, $periodoObra, $nomeAutor, $imageUrl;

   public function Obra(){}

   public function setId($id){
    $this -> id = $id;
   }
   public function setNome(String $nomeObra){
       $this -> nomeObra = $nomeObra; 
   }
   public function setTipo(String $tipoObra){
       $this -> tipoObra = $tipoObra; 
   }
   public function setPeriodo(String $periodo){
       $this -> periodoObra = $periodo; 
   }
   public function setNomeAutor($nomeAutor){
       $this -> nomeAutor = $nomeAutor;
   }
   public function setUrl($url){
       $this -> imageUrl = $url;
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
   public function getId(){
    return $this -> id;
   }
   public function getNomeAutor(){
    return $this -> nomeAutor;
    }
    public function getUrl(){
    return $this -> imageUrl;
    }   
   public function toString(){

   }



   
   public function InsertObra($obraObj){
    require_once 'connection.php';
    $connection = Connection::StartConnection();

    $insertStatement = $connection->prepare("INSERT INTO tbobra 
                                            (imageUrl, nomeObra, categoriaObra, periodoObra, nomeAutor)
                                         VALUES(?,?,?,?,?)");
                                       
    $Iurl = $obraObj->getUrl();                               
    $nome = $obraObj->getNome();
    $tipo = $obraObj->getTipo();
    $periodo = $obraObj->getPeriodo();
    $autor = $obraObj->getNomeAutor();

    $insertStatement->bindParam(1,$Iurl);
    $insertStatement->bindParam(2,$nome);
    $insertStatement->bindParam(3,$tipo);
    $insertStatement->bindParam(4,$periodo);
    $insertStatement->bindParam(5,$autor);

    return $insertStatement->execute();
}




public function Listar(){
    require_once ('connection.php');
    $connection = Connection::StartConnection();
    $querySelect = "select imageurl, nomeObra, categoriaObra, periodoObra, nomeautor from tbobra";
    
    $resultado = $connection->query($querySelect);
    $lista = $resultado->fetchAll();
    return $lista;   
}
}


?>