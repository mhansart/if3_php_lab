<?php 
    session_start(); // pour pouvoir créer des variables de session
    ob_start(); // pour pouvoir utiliser header()
    include("view/html/head.php");
    include("view/menu/menu.php");

    include("controller/router.php");

    include("view/html/footer.php");
?>