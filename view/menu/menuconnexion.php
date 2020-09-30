<?php 
    if(isset($_SESSION["nom"]))
    {
        echo "<p>Bienvenue<span class='bold'> ".$_SESSION["prenom"]." ".$_SESSION["nom"]."</span></p>";
    }
?>

    <div class="connexion btnBasis"><?php 
            if(isset($_SESSION["nom"]))
            {
                echo '<a href="?section=moncompte">Mon compte</a>';
            }
            else 
            {
                echo '<a href="?section=connexion">Connexion</a>';
            }
        ?></div>

<div class="facebook"><i class="fab fa-facebook-f"></i></div>