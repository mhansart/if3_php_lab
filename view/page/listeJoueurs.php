<?php 
    try{    // connexion avec la base de données avec PDO   
        $resultat="" ;
        $basededonnees = "mysql:host=localhost;dbname=skywalkers;charset=utf8";    
        $utilisateur = "root";    
        $motdepasse = "";    
        $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
        // sélection des données   
        $requete = "SELECT joueur_id,joueur_nom,joueur_prenom,joueur_email,joueur_position,joueur_niveau,joueur_role,joueur_nom_user FROM `joueurs` ORDER BY joueur_id" ;    // affichage des données avec une nouvelle boucle « foreach »    
        $joueurs = $pdo->query($requete);
        foreach($joueurs as $joueur){        
            $resultat.= "<tr><td>".$joueur['joueur_id']."</td><td>".$joueur['joueur_nom']."</td><td>".$joueur['joueur_prenom']."</td><td>".$joueur['joueur_email']."</td><td>".$joueur['joueur_position']."</td><td>".$joueur['joueur_niveau']."</td><td>".$joueur['joueur_role']."</td><td>".$joueur['joueur_nom_user']."</td></tr>";   
        }}catch(PDOException $e){    echo $e->getMessage();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style1.css">
    <title>Document</title>
</head>
<body>
        <h1>Tous les joueurs</h1>
            <table>
                    <?= $resultat; ?>
            </table>
    
</body>
</html>