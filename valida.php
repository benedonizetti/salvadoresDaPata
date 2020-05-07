<?php
session_start();
include 'conexao.php';

if(empty($_POST['fNome']) || empty($_POST['fSenha'])){
    header('location: index.html');
    exit();
}
$nome = $_POST['fNome'];
$senha = $_POST['fSenha'];

$query = "select * from cadastro where nome ='{$nome}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['fNome'] = $nome;
    header('location: segunda.php');
    exit();
}else{
    header('location: logar.html');
}

?>