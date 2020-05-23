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

        

        public function inserirUsuario($usuario){
            $sql = "INSERT INTO usuario (nome,senha) values ('".$usuario->getNome()."','".$usuario->getSenha()."')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

    }

?>