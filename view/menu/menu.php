<header class="menuFixe">
    <div class="containerMenuFixe">
        <div class="logodark"><a href="?section=accueil"><img src="public/img/logodark.png" alt="logo dark"></a></div>
        <div class="d-flex-menu">
            <div class="menuconnexion-menuFixe"><?php require_once("view/menu/menuconnexion.php");  ?></div>
            <div class="menuaccueil-menuFixe"><?php require_once("view/menu/menuaccueil.php");  ?></div>
        </div>
    </div>
    <?php if(isset($_SESSION["nom"],$_SESSION['prenom'])){
        require_once ("view/menu/menuCompte.php");
    } ?>
</header>
<div class="containerContent">
     