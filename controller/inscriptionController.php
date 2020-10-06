<?php
    try{
        if(isset($_POST["nom"],$_POST["prenom"],$_POST["mdp"]))
        {     
            if(trim($_POST["nom"]) !== "" && trim($_POST["prenom"]) !== ""){ 
                $nom = $_POST["nom"];
                $prenom=$_POST["prenom"];
                $email=$_POST["email"];
                $position=$_POST["position"];
                $niveau=$_POST["niveau"];
                $role=$_POST["role"];
                $mdp=$_POST["mdp"];
                $_SESSION["nom"] = trim($nom);
                $_SESSION["prenom"] = trim($prenom);
                if($role=="coach"){
                    header("Location:?section=compteCoach");
                }else{
                    echo "non";
                    header("Location:?section=compteJoueur");
                }
                
                $basededonnees = "mysql:host=localhost;dbname=skywalkers;charset=utf8";        
                $identifiant = "root";        
                $motdepasse = "";        
                $pdo = new PDO($basededonnees, $identifiant, $motdepasse, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $requeteInscription = "INSERT INTO joueurs (joueur_nom,joueur_prenom,joueur_email,joueur_position,joueur_niveau,joueur_role,joueur_mdp,joueur_nom_user) VALUES (:nom,:prenom,:email,:position,:niveau,:roles,:mdp,LOWER(CONCAT(LEFT(joueur_prenom,2),LEFT(joueur_nom,4))))";      
                $objet = $pdo->prepare($requeteInscription);        
                $objet->execute(array(            
                    ":nom" => trim($nom),
                    ":prenom"=>trim($prenom),
                    ":email"=>trim($email),
                    ":position"=>trim($position),
                    ":niveau"=>trim($niveau),
                    ":roles"=>trim($role),
                    ":mdp"=>trim($mdp)     
                    ));
                }
        }
    } 
    catch(PDOException $e){    
        $message.=$e->getMessage();
    }  
    include("view/page/inscription.php"); 
?>