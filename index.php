<?php 
    session_start(); // pour pouvoir créer des variables de session
    ob_start(); // pour pouvoir utiliser header()
    require_once("view/html/head.php");
    require_once("controller/router.php");
?>