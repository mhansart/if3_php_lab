<div class="listJoueurs">
    <?php 
        try{    // connexion avec la base de données avec PDO   
            $resultat="" ;
            $basededonnees = "mysql:host=localhost;dbname=skywalkers;charset=utf8";    
            $utilisateur = "root";    
            $motdepasse = "";    
            $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
            // sélection des données   
            $requete = "SELECT joueur_nom,joueur_prenom,joueur_email,joueur_position,joueur_niveau,joueur_role,joueur_nom_user,UPPER(CONCAT(LEFT(joueur_prenom,1),LEFT(joueur_nom,1))) AS 'joueur_initiales' FROM `joueurs` ORDER BY joueur_id" ;    // affichage des données avec une nouvelle boucle « foreach »    
            $joueurs = $pdo->query($requete);
            foreach($joueurs as $joueur){        
                echo"<div class='oneJoueur'><div class='nomVisible'><p class='initiales'>".$joueur['joueur_initiales']."</p><p class='bold nomPrenom'>".$joueur['joueur_prenom']." ".$joueur['joueur_nom']."</p></div><div class='joueurProprietes'><p>Nom d'utilisateur: <span class='bold'>".$joueur['joueur_nom_user']."</span></p><p>E-mail: <span class='bold'>".$joueur['joueur_email']."</span></p><p>Position sur le terrain: <span class='bold'>".$joueur['joueur_position']."</span></p><p>Niveau: <span class='bold'>".$joueur['joueur_niveau']."</span></p><p>Rôle: <span class='bold'>".$joueur['joueur_role']."</span></p></div></div>";   
            }}
            catch(PDOException $e)
            {    echo $e->getMessage();
            }
    ?>
</div>
