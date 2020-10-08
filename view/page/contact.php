<?php require_once("view/menu/menu.php"); ?>
<div class="containerWidth">
    <div class="p-i-flex flexContact">
        <div class="imgContact"><img src="public/img/contact.jpg" alt="contact"></div>
        <form method="post">
            <h2 class="titleContent">Contact</h2>
            <label>Nom:</label>
            <input type="text" name="nom" required>
            <label>Prénom:</label>
            <input type="text" name="prenom" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Message:</label>
            <textarea rows="7" name="message" required></textarea>
            <button type="submit">Envoyer</button>
            <p><?= $etat; ?></p>
           
    </form>
    </div>
</div>
<?php require_once("view/menu/menufooter.php");  ?>
<script src="public/js/scriptContact.js"></script>
<?php require_once("view/html/footer.php"); ?>

