<?php
session_start();

if(!$_SESSION['fNome']){
    header('location: formLogin.php');
    exit();
}
?>