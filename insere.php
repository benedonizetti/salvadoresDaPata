<?php
//Inclui o arquivo conexao.php para que não precise escrever o codigo de conexao toda hora
include 'conexao.php';

//Pega o valor digitado pelo usuario na tela de index e coloca em uma variavel(exemplo) 
$nome = $_POST['fNome'];
$senha = $_POST['fSenha'];
$email = $_POST['fEmail'];

$sql = "INSERT INTO cadastro (nome, senha, email )
VALUES ('$nome', md5('$senha'), '$email')";

if ($conn->query($sql) === TRUE) {
    echo "pronto, já cadastrei no banco pra você!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Clique <a href="logar.html">aqui</a> para logar!</p>
</body>
</html>