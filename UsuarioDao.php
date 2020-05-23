<?php

    include_once "Conexao.php";

    
    class UsuarioDao{
        public $conn;

        
        function __construct(){
            $conexao = new Conexao();
            $this->conn = $conexao->getConexao();
        }

    
        function listaUsuario(){
            $sql = "SELECT idUsuario, nome FROM usuario";

            $resul = $this->conn->query($sql);
            if ($resul->num_rows >0) {
                while ($linha = $resul->fetch_assoc()) {
                    echo "id: ".$linha["idUsuario"]."<br>";
                    echo "nome: ".$linha["nome"]."<br>";
                }
            }else{
                echo "nenhum usuario cadastrado no momento";
            }
        }

        function inserirUsuario(){
            $sql = "INSERT INTO usuario (nome,senha) VALUES ('toddynho','teste123')";
            if ($this->conn->query($sql) == true) {
                echo "Usuario inserido com sucesso!";
            }else{
                echo "Não possivel inserir usuario!";
            }
        }


    }
    

?>