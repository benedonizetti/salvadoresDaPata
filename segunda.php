<?php
include 'verifica.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGADO</title>
    </head>
<body>
    <h2>Você está logado!</h2>
    <p>Seja bem vindo(a) <?php echo $_SESSION['fNome']."<br>".$_SESSION['id']?></p>
    <a href="logout.php">Sair</a>
</body>

</html>