<?php include("view/menu/menu.php");  ?>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php 
    if(isset($_SESSION["nom"]))
    {
        echo "<p>Bienvenue " . $_SESSION["nom"] . "<p>";
    }
?>
<?php include("view/menu/menufooter.php");  ?>
<script src="public/js/script.js"></script>
<?php include("view/html/footer.php"); ?>