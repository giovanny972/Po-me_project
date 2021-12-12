<?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact</h1> 
        <p><b>Nom : </b>' . $_POST['nom'] . '<br> 
        <b>Email : </b>' . $_POST['email'] . '<br> 
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('loic.fremond@hotmail.fr', 'Envoi depuis la page de contact', $message, $entete);

    }

    header('Location : ');
   