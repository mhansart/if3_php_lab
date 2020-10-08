<?php 
    try{    // connexion avec la base de données avec PDO   
        $listeJoueurs="" ;
        $basededonnees = "mysql:host=localhost;dbname=skywalkers;charset=utf8";    
        $utilisateur = "root";    
        $motdepasse = "";    
        $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
        // sélection des données   
        $requete = "SELECT joueur_id,joueur_nom,joueur_prenom,joueur_email,joueur_position,joueur_niveau,joueur_role,joueur_nom_user,UPPER(CONCAT(LEFT(joueur_prenom,1),LEFT(joueur_nom,1))) AS 'joueur_initiales' FROM `joueurs` ORDER BY joueur_id" ;    // affichage des données avec une nouvelle boucle « foreach »    
        $joueurs = $pdo->query($requete);
        foreach($joueurs as $joueur){
            if($_SESSION['role'] == 'coach')
            {
                $button = "<form action='#' method='post'>
                <input type='hidden' name='name' value='". $joueur['joueur_id']."'>
                <input type='submit' name='submit' class='deleteJoueur' value='Supprimer ce joueur'></form>";
            }
            else 
            {
                $button ="";
            };
            $listeJoueurs.=
            "<div class='oneJoueur'>
                    <p class='initiales'>".$joueur['joueur_initiales']."</p>
                    <div class='propriete'>
                        <p class='bold nomPrenom'>".$joueur['joueur_prenom']." ".$joueur['joueur_nom']."</p>
                    </div>
                    <div class='propriete'>
                        <p>Nom d'utlisateur:</p> <p class='bold'>".$joueur['joueur_nom_user']."</p>
                    </div>
                    <div class='propriete'>
                        <p>E-mail: </p><p class='bold'>".$joueur['joueur_email']."</p>
                    </div>
                    <div class='propriete'>
                        <p>Sur le terrain: </p><p class='bold'>".$joueur['joueur_position']."</p>
                    </div>
                    <div class='propriete'>
                        <p>Niveau: </p><p class='bold'>".$joueur['joueur_niveau']."</p>
                    </div>
                    <div class='propriete'>
                        <p>Rôle: </p><p class='bold'>".$joueur['joueur_role']."</p>
                    </div>
                    <div class='joueur-delete'>
                        ".$button."
                    </div>
            </div>";  
        };
        if(isset($_POST['name']))       
         {
         $rqt="DELETE FROM `joueurs` where `joueurs`.`joueur_id`= :id";
         $objet = $pdo->prepare($rqt);        
         $objet->execute(array(            
            ":id" => trim($_POST['name'])          
        )); 
        header("Location:?section=lesjoueurs");        
        }
    }       
        catch(PDOException $e)
        {    echo $e->getMessage();
        }
    require_once("view/page/lesjoueurs.php");
?>