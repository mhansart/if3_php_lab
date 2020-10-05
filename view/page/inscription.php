<?php include("view/menu/menu.php");  ?>
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
                    <option value="debutant">Débutant</option>
                    <option value="avance">Avancé</option>
                </select>
                <label>Rôle:</label>
                <select name="role" id="role"required>
                    <option value=""></option>
                    <option value="coach">Coach</option>
                    <option value="joueur">Joueur</option>
                </select>
                <label for="position">Position sur le terrain:</label>
                <select name="position" id="position"required>
                    <option value=""></option>
                    <option value="handler">Handler</option>
                    <option value="cutter">Cutter</option>
                </select>
                <label>Adresse e-mail:</label>
                <input type="text" name="email" required>
                <label>Mot de passe:</label>
                <input type="text" name="mdp" required>
                <button type="submit">S'inscrire</button>
                <p>Déjà inscris? <span class="bold"> <a href="?section=connexion">Connecte-toi !</a> </span></p>
            </form>
        </div>
    </div>
</div>
<?php include("view/menu/menufooter.php");  ?>
<script src="public/js/script.js"></script>
<?php include("view/html/footer.php"); ?>
