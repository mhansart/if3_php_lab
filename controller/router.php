<?php 
    if(isset($_GET["section"]))
    {
        switch ($_GET["section"]) {
            case 'accueil':
                require_once("controller/accueilController.php");
                break;
            case 'lultimate':
                require_once("controller/lultimateController.php");
                break;
            case 'leclub':
                require_once("controller/leclubController.php");
                break;
            case 'lesentrainements':
                require_once("controller/lesentrainementsController.php");
                break;
            case 'contact':
                require_once("controller/contactController.php");
                break;
            case 'inscription':
                require_once("controller/inscriptionController.php");
                break;
            case 'connexion':
                require_once("controller/connexionController.php");
                break;
            case 'deconnexion':
                require_once("controller/deconnexionController.php");
                break;
            case 'moncompte':
                require_once("controller/moncompteController.php");
                break;
            case 'lesjoueurs':
                require_once("controller/lesjoueursController.php");
                break;
            case 'lesevents':
                require_once("controller/leseventsController.php");
                break;
            case 'comptebloque':
                require_once("controller/comptebloqueController.php");
                break;
            default:
                require_once("view/error/404.php");
                break;
        }
    }
    else
    {
        require_once("view/page/accueil.php");
    }
?>