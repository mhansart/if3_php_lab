<?php 
    // supprimer la variable de session nom
    unset($_SESSION["nom"]);
    // supprimer la session
    session_destroy();
    // rediriger
    header("Location:?section=connexion");
?>