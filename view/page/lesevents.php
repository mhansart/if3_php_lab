<?php  require_once("view/menu/menu.php");  ?>
<div class="containerWidth">
<h2 class="titleContent" >Tous les évènements</h2>
    <div class="containerEvents">
    
        <div class="col1">
        
            <div class="listEvent">
                
                <?= $listeEvents; ?>
            </div>
    </div>
    <div class="col2">
            <?= $coach_joueur; ?>
    </div>
</div>
<?php require_once("view/menu/menufooter.php");  ?>
<script src="public/js/scriptEvents.js"></script>
<?php require_once("view/html/footer.php"); ?>