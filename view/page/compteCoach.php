<?php  include("view/menu/menu.php");  ?>
<div class="containerWidth">
    <div class="containerCoach">
        <div class="col1">Les prochains évènements</div>
        <div class="col2">
        <div class="btnAction"><h2 class="titleContent">Mes infos</h2></div>
        <div class="btnAction"><h2 class="titleContent"><a href="?section=deconnexion"> Se déconnecter</a></h2></div>
        <div class="btnAction"><h2 class="titleContent">Ajouter un évènement</h2></div>
        <div class="btnAction"><h2 class="titleContent" id="joueursTitle" >Voir les joueurs</h2>
            <div id="listeJoueurs"><?php include("view/annexe/listeJoueurs.php");  ?></div></div>
        </div>
    </div>
</div>
<?php include("view/menu/menufooter.php");  ?>
<script src="public/js/script.js"></script>
<?php include("view/html/footer.php"); ?>}