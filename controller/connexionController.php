<?php 
    try{    // connexion avec la base de données avec PDO   
        $message="";
        if(isset($_POST['username'],$_POST['mdpUser']))
        {
            if($_POST['username']!="" && $_POST['mdpUser']!=""){
                $user =$_POST['username'];
                $mdpUser=$_POST['mdpUser'];
                $basededonnees = "mysql:host=localhost;dbname=skywalkers;charset=utf8";    
                $utilisateur = "root";    
                $motdepasse = "";    
                $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
                // sélection des données   
                $requete = "SELECT joueur_nom, joueur_nom_user, joueur_mdp FROM joueurs WHERE joueur_nom_user = '$user";
                $joueurs = $pdo->query($requete);    
                foreach($joueurs as $joueur){ 
                    if($joueur['joueur_mdp'] == $mdpUser){
                        $message = "mot de passe correct";
                    } else{
                        $message="mdp incorrect";
                    }   
                }   
            }
        }
    }catch(PDOException $e){    echo $e->getMessage();}
        include("view/page/connexion.php");
?> 
     