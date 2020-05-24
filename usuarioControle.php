<?php
//Inclui o arquivo conexao.php para que não precise escrever o codigo de conexao toda hora
include_once "Usuario.php";
include_once "UsuarioDao.php";

if(isset($_POST['fNome'])){
    $nome = $_POST['fNome'];
}
if(isset($_POST['fSenha'])){
    $senha = $_POST['fSenha'];    
}


$usuario = new Usuario($nome,$senha);

$usuarioDao = new UsuarioDao();
//$usuarioDao->inserirUsuario($usuario);
$usuarioDao->pesquisarUsuario($usuario);
//$usuarioDao->listarUsuario();
//$usuarioDao->atualizarUsuario($usuario);
//$usuarioDao->deletarUsuario($usuario);
?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<body>
    <p>Clique <a href="logar.html">aqui</a> para logar!</p>
</body>
</html>
