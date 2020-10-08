<?php 
    if(isset($_SESSION["nom"],$_SESSION['prenom']))
    {
        echo "<p>Bienvenue<span class='bold'> ".$_SESSION["prenom"]." ".$_SESSION["nom"]."</span></p>";
    }
?>

    <?php 
            if(isset($_SESSION["nom"],$_SESSION["prenom"]))
            {
                echo '';
            }
            else 
            {
                echo '<div class="connexion btnBasis"><a href="?section=connexion">Connexion</a></div>';
            }
        ?>

<a class="facebook" href="https://www.facebook.com/ultimateskywalkers/"><i class="fab fa-facebook-f"></i></a>