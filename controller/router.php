<?php 
    if(isset($_GET["section"]))
    {
        switch ($_GET["section"]) {
            case 'accueil':
                include("controller/accueilController.php");
                break;
            case 'lultimate':
                include("controller/lultimateController.php");
                break;
            case 'leclub':
                include("controller/leclubController.php");
                break;
            case 'lesentrainements':
                include("controller/lesentrainementsController.php");
                break;
            case 'contact':
                include("controller/contactController.php");
                break;
            case 'connexion':
                include("controller/connexionController.php");
                break;
            case 'deconnexion':
                include("controller/deconnexionController.php");
                break;
            case 'moncompte':
                include("controller/moncompteController.php");
                break;
            
            default:
                include("view/error/404.php");
                break;
        }
    }
    else
    {
        include("view/page/accueil.php");
    }
?>