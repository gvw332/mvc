<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'src/Exception.php'; // Gestion des erreurs

require_once 'src/PHPMailer.php'; // Gestion des emails

require_once 'src/SMTP.php'; // Gestion du SMTP



// Fonction pour envoyer un email avec des paramètres ($destinataire, $sujet, $message, $copie, $typeEmail)
function envoiMail($destinataire, $sujet, $message, $copie, $typeEmail){



    $mail = new PHPMailer(true); 
    $mail->IsSMTP(); //appel du constructeur PHPMailer pour paramétrer le serveur smtp
    $mail->Host = '';
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
        $mail->Username = "";
        $mail->Password = '';
    }

    $mail->CharSet =  'UTF-8'; //'iso-8859-1';
    $mail->setLanguage('fr');

    header('Content-Type: text/html; charset=utf-8');

    $mail->smtpConnect();

    $mail->From = '';

    $mail->FromName = 'Ceci est un mail automatique , merci de ne pas y répondre';
    if ($copie) {
        $mail->addAddress('');
    }
    $mail->addEmbeddedImage(dirname(__FILE__) . '', '');

    if ($typeEmail == 'contact') {
        $htmlMessage = '<html>
    <body>        
        <p>Nous avons bien reçu votre demande de renseignement suivante:</p>   
        <br>     
        <p style="width:500px;">' . $message . '</p>
        <br>
        <p>Nous vous répondrons dès que possible.</p>
        <br>
        <p>Ceci est un mail automatique, veuillez ne pas y répondre.</p>
        <hr>
        <div style="display:inline-flex;  ">
            <img  style="width: 150px" src="cid:gvwtech">        
            <div style="padding-left:50px;">        
                <p>nom de société</p>
                <p>adress</p>
                  
            </div>
        </div>
    </body>
    </html>';
    } else if ($typeEmail == 'inscription') {
        $htmlMessage = '<html>
        <body>        
              
            <br>     
            <p style="width:500px;">' . $message . '</p>
            <br>
            <br>
            <p>Ceci est un mail automatique, veuillez ne pas y répondre.</p>
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
    }

    $mail->isHTML(true);
    $mail->addAddress($destinataire);

    $mail->Subject = $sujet;

    $mail->Body = $htmlMessage;
    $mail->AltBody = 'Nous avons bien reçu votre demande de renseignement suivante: \r\n\r\n' . $message . 'Nous vous répondrons dès que possible \r\n Ceci est un mail automatique, veuillez ne pas y répondre.';


    // Ceci permet de gérer le texte du flash
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}