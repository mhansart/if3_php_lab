<?php 
    $message = "";
    // verifie si formulaire est soumis
    if(isset($_POST["nom"], $_POST["prenom"]))
    {
        // vérifier si le nom est rempli
        if(trim($_POST["nom"]) !== "" && trim($_POST["prenom"]) !== "")
        {
            // enregistre dans une variable de session
            $_SESSION["nom"] = trim($_POST["nom"]);
            $_SESSION["prenom"] = trim($_POST["prenom"]);
            header("Location:?section=moncompte");
        }
        else 
        {
            $message = '<p class="error">Erreur : veuillez remplir votre nom et prénom</p>';
        }
    }


    include("view/page/connexion.php");
?>