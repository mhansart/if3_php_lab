<?php include("view/menu/menu.php");  ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="#" method="post">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prénom">
    <button type="submit" id="btn_submit">Connexion</button>
</form>
<?= $message; ?>
</div>
<?php include("view/menu/menufooter.php");  ?>
<script src="public/js/script.js"></script>
<?php include("view/html/footer.php"); ?>
