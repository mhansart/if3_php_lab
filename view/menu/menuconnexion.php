<?php 
    if(isset($_SESSION["nom"]))
    {
        echo "<p>Bienvenue<span class='bold'> ".$_SESSION["prenom"]." ".$_SESSION["nom"]."</span></p>";
    }
?>

    <div class="connexion btnBasis"><?php 
            if(isset($_SESSION["nom"],$_SESSION["prenom"]))
            {
                echo '<a href="?section=compteCoach">Mon compte</a>';
            }
            else 
            {
                echo '<a href="?section=connexion">Connexion</a>';
            }
        ?></div>

<a class="facebook" href="https://www.facebook.com/ultimateskywalkers/"><i class="fab fa-facebook-f"></i></a>