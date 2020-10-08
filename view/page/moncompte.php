<?php  require_once("view/menu/menu.php");  ?>
<div class="containerWidth">
<h2 class="titleContent" >Mes infos</h2>
    <div class="containerInfos">
    
        <div class="col1">
            
            <div class="listInfos">
                <div class="joueurCard">
                    <?= $listeInfos; ?>
                </div>
            </div>
    </div>
    <div class="col2">
        <div>
            <h2 id="updateInfos">Modifier mes infos</h2>
            <form method="post" style="display:none" id="formUpdate">
                <h3 class ="titleContentUpdate" id="updateTitle">Modifier mes infos</h3>
                <label>Nom:</label>
                    <input type="text" name="nom" required value="<?= $_SESSION['nom'];?>">
                    <label>Prénom:</label>
                    <input type="text" name="prenom" required value="<?= $_SESSION['prenom'];?>">
                    <label>Niveau:</label>
                    <select name="niveau" id="niveau"required>
                        <option value="Débutant" <?= $niveauDebutant;?>>Débutant</option>
                        <option value="Avancé" <?= $niveauAvance;?>>Avancé</option>
                    </select>
                    <label>Rôle:</label>
                    <select name="role" id="role"required>
                        <option value="Coach" <?= $roleCoach;?>>Coach</option>
                        <option value="Joueur" <?= $roleJoueur;?>>Joueur</option>
                    </select>
                    <label for="position">Position sur le terrain:</label>
                    <select name="position" id="position"required>
                        <option value="Handler" <?= $positionHandler;?>>Handler</option>
                        <option value="Cutter" <?= $positionCutter;?>>Cutter</option>
                    </select>
                    <label>Adresse e-mail:</label>
                    <input type="text" value="<?= $_SESSION['email'];?>" name="email" required>
                    <?= $inputHidden; ?>
                    <button type="submit">Modifier</button>
            </form>
        </div>
    </div>
</div>
<?php require_once("view/menu/menufooter.php");  ?>
<script src="public/js/scriptMonCompte.js"></script>
<?php require_once("view/html/footer.php"); ?>