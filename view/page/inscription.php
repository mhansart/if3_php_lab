<?php require_once("view/menu/menu.php");  ?>
<div class="containerWidth">
    <div class="p-i-flex flexContact">
        <div class="imgContact"><img src="public/img/connexion.jpg" alt="contact"></div>
        <div class="connexionForm">
            <form method="post" id="formInscription">
            <h2 class="titleContent">Inscription</h2>
                <label>Nom:</label>
                <input type="text" name="nom" required>
                <label>Prénom:</label>
                <input type="text" name="prenom" required>
                <label>Niveau:</label>
                <select name="niveau" id="niveau"required>
                    <option value=""></option>
                    <option value="Débutant">Débutant</option>
                    <option value="Avancé">Avancé</option>
                </select>
                <label>Rôle:</label>
                <select name="role" id="role"required>
                    <option value=""></option>
                    <option value="Coach">Coach</option>
                    <option value="Joueur">Joueur</option>
                </select>
                <label for="position">Position sur le terrain:</label>
                <select name="position" id="position"required>
                    <option value=""></option>
                    <option value="Handler">Handler</option>
                    <option value="Cutter">Cutter</option>
                </select>
                <label>Adresse e-mail:</label>
                <input type="text" name="email" required>
                <label>Mot de passe:</label>
                <input id="iptMdp" placeholder="Min une maj + une min+ un chiffre+ un caract. sp. " type="text" name="mdp" required>
                <button type="submit">S'inscrire</button>
                <p>Déjà inscris? <span class="bold"> <a href="?section=connexion">Connecte-toi !</a> </span></p>
            </form>
        </div>
    </div>
</div>
<?php require_once("view/menu/menufooter.php");  ?>
<script src="public/js/scriptInscription.js"></script>
<?php require_once("view/html/footer.php"); ?>
