<?php 
    try{    // connexion avec la base de données avec PDO 
        $messageMdp ="";  
        if(!(isset($_SESSION["tentatives"])))
            {
                $_SESSION["tentatives"]=0;
            }
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
                $requete = "SELECT joueur_nom_user, joueur_mdp,joueur_role,joueur_nom, joueur_prenom,joueur_position,joueur_niveau,joueur_email FROM joueurs WHERE joueur_nom_user = '$user'";
                $objet = $pdo->query($requete); 
                $joueurProperties = $objet->fetchAll();  
                foreach($joueurProperties as $joueurProperty){ 
                    if($joueurProperty['joueur_mdp'] ==$mdpUser ){
                        $_SESSION['nom']=$joueurProperty['joueur_nom'];
                        $_SESSION['prenom']=$joueurProperty['joueur_prenom'];
                        $_SESSION['role']=$joueurProperty['joueur_role'];
                        $_SESSION["niveau"] = $joueurProperty['joueur_niveau'];
                        $_SESSION["position"] = $joueurProperty['joueur_position'];
                        $_SESSION["email"] = $joueurProperty['joueur_email'];
                        
                        header("Location:?section=moncompte");
                    }else{
                        if($_SESSION["tentatives"] == 2 && $joueurProperty['joueur_mdp'] !==$mdpUser){
                            header("Location:?section=comptebloque");
                        }else{
                        $messageMdp="Cet utilisateur ou ce mot de passe n'est pas correct";
                        $_SESSION["tentatives"]++;
                        echo $_SESSION["tentatives"];
                        }
                    }
                }
            }
        }
    }catch(PDOException $e){    echo $e->getMessage();}
        require_once("view/page/connexion.php");
?> 
     