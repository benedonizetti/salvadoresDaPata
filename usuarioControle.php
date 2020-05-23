<?php
//Inclui o arquivo conexao.php para que não precise escrever o codigo de conexao toda hora
include_once "Usuario.php";
include_once "UsuarioDao.php";

$usuarioDao = new UsuarioDao();
//$usuarioDao->inserirUsuario();
$usuarioDao->listaUsuario();

//Pega o valor digitado pelo usuario na tela de index e coloca em uma variavel(exemplo) 
/*$nome = $_POST['fNome'];
$senha = $_POST['fSenha'];


$usuario = new Usuario($nome,$senha);
echo "usuario: ". $usuario->getNome(). "<br>";

            
$sql = "INSERT INTO usuario (nome, senha) VALUES ('$nome', md5('$senha'))";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
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
</html>*/