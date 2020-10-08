<?php 
    // configuration smtp/server -> https://waytolearnx.com/2020/01/comment-configurer-wampserver-pour-envoyer-un-mail-depuis-localhost-en-php.html
    $etat="";
    if(isset($_POST['message'])){
      $entete  = 'MIME-Version: 1.0' . "\r\n";
      $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $entete .= 'From: ' . $_POST['email'] . "\r\n";
      $dest = "hansart.marine@gmail.com";
      $sujet = "Message envoyé depuis la page de contact des Skywalkers";
      $corp = '<h1>Message envoyé depuis la page Contact des Skywalkers</h1>
      <p><strong>Nom : </strong>' . $_POST['nom'].' '. $_POST['prenom'] . '<br>
      <strong>Email : </strong>' . $_POST['email'] . '<br>
      <strong>Message : </strong>' . $_POST['message'] . '</p>';
      if (mail($dest, $sujet, $corp, $entete)) {
        $etat= 'Votre message a bien été envoyé.';
      } else {
        $etat='Erreur, réessayez';
      }
    }  
    require_once("view/page/contact.php");
?>