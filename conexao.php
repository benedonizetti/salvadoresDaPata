<?php
    class Conexao {
        
        public $servername = "localhost";
        public $username = "root";
        public $password = "";
        public $dbname = "projeto";
        public $conn;

        function __construct(){
            // Create connection
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            // Check connection
            if ($this->conn->connect_error) {
            die("Conexão falhou");
            }else{
                //echo "Conexao estabelecida com sucesso!";
            }
        }

        function getConexao(){
            return $this->conn;
        }

    }
?>