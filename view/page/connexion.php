<?php require_once("view/menu/menu.php");  ?>
<div class="containerWidth">
    <div class="p-i-flex flexContact">
        <div class="imgContact"><img src="public/img/connexion.jpg" alt="contact"></div>
        <div class="connexionForm">
            <form method="post" id="formConnexion">
            <h2 class="titleContent">Connexion</h2>
                <label>Nom d'utilisateur:</label>
                <input type="text" name="username" required>
                <label>Mot de passe:</label>
                <input type="text" name="mdpUser" required>
                <button type="submit">Se connecter</button>
                <p class="bold msgErreur"><?= $messageMdp; ?></p>
                <p>Pas encore de compte? <span class="bold"> <a href="?section=inscription">Inscris-toi !</a> </span></p>
                
            </form>
        </div>
    </div>
</div>
<?php require_once("view/menu/menufooter.php");  ?>
<script src="public/js/script.js"></script>
<?php require_once("view/html/footer.php"); ?>
