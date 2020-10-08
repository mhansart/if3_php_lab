<?php  require_once("view/menu/menu.php");  ?>
<div class="containerWidth">
    <div class="containerJoueurs">
        <div class="col1">
            <div class="listJoueurs">
                <h2 class="titleContent" id="joueursTitle" >Tous les joueurs</h2>
                <div class="joueurCard">
                    <?= $listeJoueurs; ?>
                </div>
            </div>
        </div>      
    </div>
</div>
<?php require_once("view/menu/menufooter.php");  ?>
<script src="public/js/scriptLesJoueurs.js"></script>
<?php require_once("view/html/footer.php"); ?>

