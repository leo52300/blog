<?php
if(isset($_POST['submit'])) {
    $to = "leo.menestrel52300@gmail.com";
    $subject = "Nouveau message de votre site web";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    $headers = "From: " . $name . " <" . $email . "> \r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";
    $mail_body = "Nom: " . $name . "<br>";
    $mail_body .= "E-mail: " . $email . "<br>";
    $mail_body .= "sujet: " . $sujet . "<br>";
    $mail_body .= "Message: " . $message;
    mail($to, $subject, $mail_body, $headers);
    echo "Votre message a bien été envoyé. Merci !";
}




