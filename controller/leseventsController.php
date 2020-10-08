<?php 
    try{    // connexion avec la base de données avec PDO 
        
        $coach_joueur="" ;
            if($_SESSION['role']=='coach'){
            $coach_joueur= '<div>
                    <h2 id="ajoutEvent">Ajouter un évènement</h2>
                    <form method="post" id="formEvents" style="display:none">
                        <h3 id="createEvent" class="titleContent">Créer un évènement</h3>
                        <label>Type de l\'évènement?</label>
                        <input type="text" placeholder="Entrainement, tournoi,..." name="typeEvent" required>
                        <label>Date:</label>
                        <input type="date" placeholder="YYYY-MM-DD" name="date" required>
                        <label>Adresse:</label>
                        <input type="text" name="adresse" required>
                        <label>Heure de début:</label>
                        <input placeholder="00:00:00" type="time" name="heureStart" required>
                        <label>Heure de fin:</label>
                        <input name="heureStop" type="time" id="role"required>
                        <button type="submit">Créer l\'évènement</button>
                    </form>
                    </div>';
        }else{
            $coach_joueur='<img src="public/img/events.jpg" alt="event">';
        } 
        $listeEvents="" ;
        $basededonnees = "mysql:host=localhost;dbname=skywalkers;charset=utf8";    
        $utilisateur = "root";    
        $motdepasse = "";    
        $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
        // sélection des données
        $requete = "SELECT entrainement_id,CONCAT(DAY(entrainement_date),' ', CASE MONTH(entrainement_date) WHEN 1 THEN 'Janvier' WHEN 2 THEN 'Février' WHEN 3 THEN 'Mars' WHEN 4 THEN 'Avril' WHEN 5 THEN 'Mai' WHEN 6 THEN 'Juin' WHEN 7 THEN 'Juillet' WHEN 8 THEN 'Août' WHEN 9 THEN 'Septembre' WHEN 10 THEN 'Octobre' WHEN 11 THEN 'Novembre' WHEN 12 THEN 'Décembre' END,' ', YEAR(entrainement_date)) as 'format_date',
        entrainement_adresse,
        DAY(entrainement_date) as 'jour',
        CASE MONTH(entrainement_date) WHEN 1 THEN 'Janvier' WHEN 2 THEN 'Février' WHEN 3 THEN 'Mars' WHEN 4 THEN 'Avril' WHEN 5 THEN 'Mai' WHEN 6 THEN 'Juin' WHEN 7 THEN 'Juillet' WHEN 8 THEN 'Août' WHEN 9 THEN 'Septembre' WHEN 10 THEN 'Octobre' WHEN 11 THEN 'Novembre' WHEN 12 THEN 'Décembre' END as 'mois',
        CONCAT(DATE_FORMAT(entrainement_heure_debut, '%k'),'h',DATE_FORMAT(entrainement_heure_debut,'%i')) as 'debut',
        CONCAT(DATE_FORMAT(entrainement_heure_fin, '%k'),'h',DATE_FORMAT(entrainement_heure_fin,'%i')) as 'fin',entrainement_type,
        entrainement_date FROM entrainements ORDER BY entrainement_date" ;    // affichage des données avec une nouvelle boucle « foreach »    
        $events = $pdo->query($requete);
        foreach($events as $event){
            $listeEvents.=
            "<div class='oneEvent'>
                <div class='date'><p class='bold jour'>".$event['jour']."</p><p class='mois'>".$event['mois']."</p></div>
                <div class='eventCard'>
                    <p class='bold nomPrenom'>".$event['entrainement_type']." du ".$event['format_date']."</p>
                    <p>".$event['entrainement_adresse']."</p>
                    <p> Rendez-vous à ".$event['debut']." jusqu'à ".$event['fin']."</p>
                </div>
                <div class='btnEvent'>
                    <form action='#' method='post'>
                    <input type='hidden' name='name' value='". $event['entrainement_id']."'>
                    <input type='submit' name='submit' class='present' value='Présent'></form>
                    <form action='#' method='post'>
                    <input type='hidden' name='absent' value='". $event['entrainement_id']."'>
                    <input type='submit' name='submit' class='absent' value='Absent'></form>
                </div>
            </div>";  
        };  
        if(isset($_POST['name']))       
         {
         $requeteJoueurId="SELECT joueur_id FROM joueurs WHERE joueur_nom = '{$_SESSION['nom']}' AND joueur_prenom ='{$_SESSION['prenom']}'";
         $objetjoueur = $pdo->query($requeteJoueurId);
         $objetjoueurId = $objetjoueur->fetch();
         $rqt="INSERT INTO `joueurs_entrainements` (joueur_id,entrainement_id)VALUES(:joueur_id, :entrainement_id)";
         $objet = $pdo->prepare($rqt);        
         $objet->execute(array(            
            ":joueur_id" => $objetjoueurId[0],
            ":entrainement_id"=>trim($_POST['name'])          
        ));        
        }   
        if(isset($_POST["typeEvent"],$_POST["date"],$_POST["adresse"],$_POST["heureStart"],$_POST["heureStop"]))
        {      
                $type = $_POST["typeEvent"];
                $date=$_POST["date"];
                $adresse=$_POST["adresse"];
                $heureStart=$_POST["heureStart"];
                $heureStop=$_POST["heureStop"];
                $basededonnees = "mysql:host=localhost;dbname=skywalkers;charset=utf8";        
                $identifiant = "root";        
                $motdepasse = "";        
                $pdo = new PDO($basededonnees, $identifiant, $motdepasse, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $requeteCreateEvent = "INSERT INTO `entrainements`( `entrainement_date`, `entrainement_adresse`, `entrainement_heure_debut`, `entrainement_heure_fin`, `entrainement_type`) VALUES (:dateEvent,:adresse,:heureStart, :heureStop,:typeEvent)";      
                $objet = $pdo->prepare($requeteCreateEvent);        
                $objet->execute(array(            
                    ":dateEvent"=>trim($date),
                    ":adresse"=>trim($adresse),
                    ":heureStart"=>trim($heureStart),
                    ":heureStop"=>trim($heureStop),
                    ":typeEvent" => trim($type)     
                    ));
                    header("Location:?section=lesevents");
                }
            
         }       
        catch(PDOException $e)
        {    echo $e->getMessage();
        }

    require_once("view/page/lesevents.php");
?>