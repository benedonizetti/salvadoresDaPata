<?php
    include 'conexao.php';
    class Usuario{
        private $id;
        private $nome;
        private $senha;

        public function __construct($nome,$senha){
            $this->nome=$nome;
            $this->senha=$senha;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        }

        

    }

?>