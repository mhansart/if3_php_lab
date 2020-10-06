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
                $requete = "SELECT joueur_nom_user, joueur_mdp,joueur_role,joueur_nom, joueur_prenom FROM joueurs WHERE joueur_nom_user = '$user'";
                $objet = $pdo->query($requete); 
                $joueurProperties = $objet->fetchAll();  
                var_dump($joueurProperties);
                foreach($joueurProperties as $joueurProperty){ 
                    if($joueurProperty['joueur_mdp']==$mdpUser){
                        $_SESSION['nom']=$joueurProperty['joueur_nom'];
                        $_SESSION['prenom']=$joueurProperty['joueur_prenom'];
                        if($joueurProperty['joueur_role'=='coach']){
                            header("Location:?section=compteCoach");
                        }else{
                            header("Location:?section=compteJoueur");
                        }
                    }else{
                        echo "mauvais mdp";
                    }
                }
            }
        }
    }catch(PDOException $e){    echo $e->getMessage();}
        include("view/page/connexion.php");
?> 
     