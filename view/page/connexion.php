<?php include("view/menu/menu.php");  ?>
<div class="containerWidth">
    <div class="p-i-flex flexContact">
        <div class="imgContact"><img src="public/img/connexion.jpg" alt="contact"></div>
        <div class="connexionForm">
            <form method="post" id="formConnexion">
            <h2 class="titleContent">Connexion</h2>
                <label>Nom d'utilisateur:</label>
                <input type="text" name="username" required>
                <label>Mot de passe:</label>
                <input type="text" name="mdp" required>
                <button type="submit">Se connecter</button>
                <p>Pas encore de compte? <span class="bold" id="inscrisToi">Inscris-toi !</span></p>
            </form>
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
                <label>Équipe:</label>
                <select name="equipe" id="equipe"required>
                    <option value=""></option>
                    <option value="junior">Junior</option>
                    <option value="adultes">Adulte</option>
                    <option value="master">Master</option>
                </select>
                <label for="positiononField">Position sur le terrain:</label>
                <div class="onField">
                    <input class="firstChild" type="radio"name="position" value="handler"><label for="position">Handler</label>
                    <input type="radio"name="position" value="cutter"><label for="position">Cutter</label></div>
                </select>

                <label>Adresse e-mail:</label>
                <input type="text" name="email" required>
                <label>Mot de passe:</label>
                <input type="text" name="mdp" required>
                <button type="submit">S'inscrire</button>
                <p>Déjà inscris? <span class="bold" id="connecteToi">Connecte-toi !</span></p>
            </form>
        </div>
    </div>
</div>
<?php include("view/menu/menufooter.php");  ?>
<script src="public/js/script.js"></script>
<?php include("view/html/footer.php"); ?>
