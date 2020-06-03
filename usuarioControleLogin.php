<?php
include_once 'cabecalho.php';
include_once "Usuario.php";
include_once "UsuarioDao.php";
?>

<header class="masthead">
        <div class="container"> 
        <?php
        if(isset($_POST['fNome'])){
            $nome = $_POST['fNome'];
        }
        if(isset($_POST['fSenha'])){
            $senha = $_POST['fSenha'];    
        }
        
        
        $usuario = new Usuario($nome,$senha);
        
        $usuarioDao = new UsuarioDao();
        $usuarioDao->logar($usuario);   
        ?>   
        </div>
</header>
<?php
    include_once 'rodape.html';
?>
</html>


