<?php 
    $message = "";
    // verifie si formulaire est soumis
    if(isset($_POST["nom"]))
    {
        // vérifier si le nom est rempli
        if(trim($_POST["nom"]) !== "" )
        {
            // enregistre dans une variable de session
            $_SESSION["nom"] = trim($_POST["nom"]);
            header("Location:?section=moncompte");
        }
        else 
        {
            $message = '<p class="error">Erreur : veuillez remplir votre nom</p>';
        }
    }


    include("view/page/connexion.php");
?>