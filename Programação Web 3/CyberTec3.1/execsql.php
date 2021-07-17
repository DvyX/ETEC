<?php
require_once("registro.php");
require_once("connection.php");

    class ExecSQL{
        public function InsertObra(Obra $obraObj){
            $connection = Connect::StartConnection();

            $nome = $obraObj->getNome();
            $tipo = $obraObj->getTipo();
            $periodo = $obraObj->getPeriodo();

            $insertStatement = $connection->prepare("INSERT INTO tbobra (nomeObra, categoriaObra, periodoObra)
                                                 VALUES(?,?,?)");
            $insertStatement->bindParam(1,$nome);
            $insertStatement->bindParam(2,$tipo);
            $insertStatement->bindParam(3,$periodo);
            $insertStatement->execute();
        }
        public function InsertAutor(Autor $autorObj){
            $connection = Connect::StartConnection();

            $nome = $autorObj->getNomeA();
            $nacionalidade = $autorObj->getNacao();
            $nascm = $autorObj->getDataN();
            $morte = $autorObj->getDataM();

            $insertStatement = $connection->prepare("INSERT INTO tbautor (nomeAutor, nacionalidadeAutor, dataNascmAutor, dataMorteAutor)
                                                 VALUES(?,?,?,?)");
            $insertStatement->bindParam(1,$nome);
            $insertStatement->bindParam(2,$nacionalidade);
            $insertStatement->bindParam(3,$nascm);
            $insertStatement->bindParam(4,$morte);
            $insertStatement->execute();
        }
    }


?>