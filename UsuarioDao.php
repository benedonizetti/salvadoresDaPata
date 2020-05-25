<?php

    include_once "Conexao.php";

    
    class UsuarioDao{
        public $conn;

        
        function __construct(){
            $conexao = new Conexao();
            $this->conn = $conexao->getConexao();
        }
        function pesquisarUsuario($usuario){
           $sql = "SELECT nome FROM usuario WHERE nome = '".$usuario->getNome()."'"; 
           
           $resul = $this->conn->query($sql);
           if($resul->num_rows > 0){
                while($linha = $resul->fetch_assoc()){
                    echo "nome:".$linha["nome"]."<br>";                    
                }
                }else{
                    echo "Nenhum usuario encontrado!! <br>";
                }
        }
    
        function listarUsuario(){
            $sql = "SELECT idUsuario, nome FROM usuario";

            $resul = $this->conn->query($sql);
            if ($resul->num_rows > 0) {
                while ($linha = $resul->fetch_assoc()) {
                    echo "id: ".$linha["idUsuario"]."<br>";
                    echo "nome: ".$linha["nome"]."<br>";
                }
            }else{
                echo "nenhum usuario cadastrado no momento";
            }
        }

        function inserirUsuario($usuario){
            $sql = "INSERT INTO usuario (nome,senha) VALUES ('".$usuario->getNome()."','".md5($usuario->getSenha())."')";
            if ($this->conn->query($sql) == true) {
                echo "Usuario inserido com sucesso! <br>";
            }else{
                echo "Não possivel inserir usuario! <br>";
            }
        }

        function atualizarUsuario($usuario){
            $sql = "UPDATE usuario SET nome = '".$usuario->getNome()."' where nome='".$usuario->getNome()."'";

            if ($this->conn->query($sql) == true) {
                echo "Usuario atualizado com sucesso! <br>";
            }else{
                echo "Não possivel atualizar usuario! <br>";
            }
        }

        function deletarUsuario($usuario){
            $sql = "DELETE FROM usuario  where nome='".$usuario->getNome()."'";

            if ($this->conn->query($sql) == true) {
                echo "Usuario deletado com sucesso! <br>";
            }else{
                echo "Não foi possivel deletar usuario! <br>";
            }
        }

        function logar($usuario){
            $sql = "SELECT * FROM usuario WHERE nome ='".$usuario->getNome()."' and senha = '".md5($usuario->getSenha())."'";
           
            $resul = $this->conn->query($sql);
            if ($resul->num_rows > 0) {
                session_start();
                $_SESSION['fNome'] = $usuario->getNome();
                $_SESSION['id'] = $usuario->getId();
                header('location: segunda.php');
                exit();
            }else{
                //header('location: index.html');
                echo "nao foi";
            }
        }


    }
    

?>