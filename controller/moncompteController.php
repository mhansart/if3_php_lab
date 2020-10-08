<?php 
    try{    // connexion avec la base de données avec PDO   
        $listeInfos="" ;
        $inputHidden="";
        $niveauDebutant="";
        $niveauAvance="";
        $positionHandler="";
        $positionCutter="";
        $roleCoach="";
        $roleJoueur="";
        if($_SESSION['niveau'] =='Avancé'){
            $niveauAvance="selected";
        }else{
            $niveauDebutant="selected";
        }
        if($_SESSION['position'] == 'Handler'){
            $positionHandler="selected";
        }else{
            $positionCutter="selected";
        }
        if($_SESSION['role'] == 'Coach'){
            $roleCoach="selected";
        }else{
            $roleJoueur="selected";
        }
        $basededonnees = "mysql:host=localhost;dbname=skywalkers;charset=utf8";    
        $utilisateur = "root";    
        $motdepasse = "";    
        $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
        // sélection des données  
    
    $requete = "SELECT joueur_id, joueur_nom,joueur_prenom,joueur_email,joueur_position,joueur_niveau,joueur_role,joueur_nom_user,UPPER(CONCAT(LEFT(joueur_prenom,1),LEFT(joueur_nom,1))) AS 'joueur_initiales' FROM `joueurs` WHERE joueur_nom='{$_SESSION['nom']}' AND joueur_prenom='{$_SESSION['prenom']}'" ;    // affichage des données avec une nouvelle boucle « foreach »    
        $infos = $pdo->query($requete);
        foreach($infos as $info){
            $inputHidden = "<input type='hidden' name='update' value='". $info['joueur_id']."'>";
            $listeInfos.=
            "<div class='oneJoueur'>
                    <p class='initiales'>".$info['joueur_initiales']."</p>
                    <div class='p-flex'>
                        <div class='propriete'>
                            <p class='bold nomPrenom'>".$_SESSION['prenom']." ".$_SESSION['nom']."</p>
                        </div>
                        <div class='propriete'>
                            <p>Nom d'utlisateur:</p> <p class='bold'>".$info['joueur_nom_user']."</p>
                        </div>
                        <div class='propriete'>
                            <p>E-mail: </p><p class='bold'>".$_SESSION['email']."</p>
                        </div>
                        <div class='propriete'>
                            <p>Sur le terrain: </p><p class='bold'>".$_SESSION['position']."</p>
                        </div>
                        <div class='propriete'>
                            <p>Niveau: </p><p class='bold'>".$_SESSION['niveau']."</p>
                        </div>
                        <div class='propriete'>
                            <p>Rôle: </p><p class='bold'>".$_SESSION['role']."</p>
                        </div>
                    </div>
            </div>";  
        }; 
        if(isset($_POST["update"]))    
        {        
            $rqtUpdate = "UPDATE joueurs SET joueur_nom = :nom, joueur_prenom = :prenom, joueur_position = :position,joueur_niveau = :niveau, joueur_email = :email, joueur_role = :role_joueur WHERE joueur_id= :update_id";            
            $update = $pdo->prepare($rqtUpdate);            
            $update->execute(array(                
                    ":nom" => trim($_POST["nom"]), 
                    ":prenom" => trim($_POST["prenom"]),               
                    ":update_id" => trim($_POST["update"]),
                    ":position"=> trim($_POST["position"]),
                    ":niveau"=> trim($_POST["niveau"]),
                    ":email"=>trim($_POST["email"]),
                    ":role_joueur"=>trim($_POST["role"])            
            ));   
            $_SESSION['nom'] =  trim($_POST["nom"]);
            $_SESSION['prenom'] =  trim($_POST["prenom"]); 
            $_SESSION['position'] = trim($_POST["position"]);
            $_SESSION['niveau'] = trim($_POST["niveau"]);
            $_SESSION['role'] = trim($_POST["role"]);
            $_SESSION['email'] = trim($_POST["email"]);
            header("Location:?section=moncompte");  
            }                               
    }       
        catch(PDOException $e)
        {    echo $e->getMessage();
        }
    require_once("view/page/moncompte.php");
?>