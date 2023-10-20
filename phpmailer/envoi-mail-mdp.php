<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once 'src/Exception.php'; // Gestion des erreurs

require_once 'src/PHPMailer.php'; // Gestion des emails

require_once 'src/SMTP.php'; // Gestion du SMTP


// Fonction pour envoyer un email avec des paramètres ($destinataire, $sujet, $message, $copie)
function envoiMailMdp($destinataire, $sujet, $message, $copie = false){

    $mail = new PHPMailer(true);
  
    $mail->IsSMTP();    // Appel du constructeur PHPMailer pour paramétrer le serveur smtp

    $mail->Host = 'gvw-tech.be';

    $mail->Port = 465;

    $mail->SMTPAuth = true;

    if ($mail->SMTPAuth) {

  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Username = "mail@gvw-tech.be";

        $mail->Password = 'Mail003322*/';
    }



    $mail->CharSet =  'UTF-8'; //'iso-8859-1';
    $mail->setLanguage('fr');

    header('Content-Type: text/html; charset=utf-8');
    $mail->isHTML(true);

    $mail->smtpConnect();

    $mail->From = 'mail@gvw-tech.be'; 

    $mail->FromName = 'Ceci est un mail automatique , merci de ne pas y répondre';
    if ($copie) {
        $mail->addAddress('mail@gvw-tech.be');
    }
    $mail->addEmbeddedImage(dirname(__FILE__) . '/gvw-logo-nb.png', 'gvwtech');

    $htmlMessage = '<html>
    <body>
        <h2> A votre attention</h2>
        <p>Vous avez demandé de changer votre mot de passe.
        Veuillez cliquer sur le lien ci-dessous:</p><span><a href="' . $message . '">Lien pour changer le mot de passe</a></span>

    <br>
    <p>Et suivez la procédure proposée. Merci</p>
    <hr>
    <div style="display:inline-flex;  ">
        <img  style="width: 150px" src="cid:gvwtech">        
        <div style="padding-left:50px;">        
        <p>gvw-tech</p>
        <p>54, Rue de la Brouette</p>
        <p>5030 Gembloux</p>    
        </div>
    </div>

    </body>
    </html>';

    $mail->isHTML(true);

    $mail->addAddress($destinataire);

    $mail->Subject = $sujet;

    $mail->Body = $htmlMessage;
    $mail->AltBody = 'Votre lien pour changer de mot de passe:' . $message;


    // ceci permet de gérer le texte du flash
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}