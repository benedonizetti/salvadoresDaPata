<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Salvadores da pata</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><p>Salvadores da pata</p></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adotar.php">Adotar</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="buscar.php">Buscar</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="sobre.php">Quem somos</a></li>
                        <?php
                        session_start();
                        if(isset($_SESSION['fNome'])){
                            $nome = $_SESSION['fNome'];
                            //echo "<div class='bemvindo'>Bem Vindo! <strong>$usuario</strong> | Hoje é: ".date('d/m/Y')."</div>";
                           // echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php'>Bem vindo(a) $nome!</a></li>";
                        
                            echo "<li class='nav-item submenu dropdown'>";
							echo "<a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' >Bem vindo(a) $nome!</a>";
                            echo "<ul class='dropdown-menu'>";
                            echo "<li class='nav-item'>";
                            echo "<a class='nav-link' href='logout.php'>Sair</a>"; 
                            echo "</li>";
                            echo  "</ul>";          
                            echo  "</li>";      
                        
                        
                        }
                        else{
                            echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='formLogin.php'>Login</a></li>";
                        }?>
                        
                    </ul>
                </div>
            </div>
        </nav>