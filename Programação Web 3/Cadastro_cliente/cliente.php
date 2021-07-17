<?php 

    class Cliente{
        private $nome, $rg, $cpf;

        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getRg(){
            return $this->rg;
        }
    
        public function setRg($rg){
            $this->rg = $rg;
        }
    
        public function getCpf(){
            return $this->cpf;
        }
    
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function toString(){
            print("<p style='font-size:40px'> Nome: ".$this->nome.
            "<br> RG: ".$this->rg.
            "<br> CPF: ".$this->cpf.
        "</p>");
        }
    }
?>