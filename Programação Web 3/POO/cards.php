<?php
    class Produtos{
        public function padrao(){
            print("Padrão");
        }
        public function eletrodomestico(){
            print("Eletrodomestico");
        }
        public function eletronico(){
            print("Eletronico");
        }
        public function papelaria(){
            print("Papelaria");
        }
        public function livro(){
            print("Livros");
        }
        public function limpar(){
            setcookie('codCategoria', time()-3600);
        }
    }
?>