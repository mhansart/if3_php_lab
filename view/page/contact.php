<?php include("view/menu/menu.php");  ?>
<div class="containerWidth">
    <div class="p-i-flex">
        <div class="imgContact"><img src="public/img/contact.jpg" alt="contact"></div>
    <form action="#" method="POST">
        <h2>Contactez nous</h2>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" required>
        <label for="message">Message</label>
        <textarea type="text" name="message" id="message" required></textarea>
        <button type="submit">Envoyer</button>
    </form>
    <?php
        require("phpmailer/class.phpmailer.php");
        
        $mail = new PHPMailer();
        
        $mail->IsSMTP(); //On utilise le mode SMTP pour la lib mailer
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true; //authentification requis
        $mail->Username = "hansart.marine@gmail.com"; // SMTP username
        $mail->Password = "heff2sma"; // SMTP password
        
        $mail->From = "monsite@mondomaine.fr";
        $mail->FromName = "nom";
        $mail->AddAddress("xxxx@xxxx.com");
        
        
        $mail->Subject = "Sujet";
        $mail->Body = "Le message";
        
        if(!$mail->Send())
        {
        echo "Message could not be sent. <p>";
        echo "Mailer Error: " . $mail->ErrorInfo;
        exit;
        }
        
        echo "Message has been sent";
    ?>
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('hansart.marine@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
    </div>
</div>
<?php include("view/menu/menufooter.php");  ?>
<script src="public/js/script.js"></script>
<?php include("view/html/footer.php"); ?>

