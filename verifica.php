<?php
session_start();

if(!$_SESSION['fNome']){
    header('location: login.php');
    exit();
}
?>