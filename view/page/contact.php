<?php
        $etat="";
        ini_set('SMTP','localhost');
        ini_set('smtp_port',1025);
        //aller voir => http://127.0.0.1:1080/#/
        if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact des Skywalkers</h1>
        <p><b>Nom : </b>' . $_POST['nom'].' '. $_POST['prenom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('hansart.marine@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            $etat.= 'Votre message a bien été envoyé.';
        }
    }
    ?>
<?php include("view/menu/menu.php");  ?>
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
<?php include("view/menu/menufooter.php");  ?>
<script src="public/js/script.js"></script>
<?php include("view/html/footer.php"); ?>

