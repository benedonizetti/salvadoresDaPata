<?php
session_start();

if(!$_SESSION['fNome']){
    header('location: logar.html');
    exit();
}
?>