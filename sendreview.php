<?php
// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){

  // Récupérer les données du formulaire
  $name = $_POST['name'];
  $email = $_POST['email'];
  $rating = $_POST['rating'];
  $comment = $_POST['comment'];

  // Traitement des données du formulaire
  // ...

  // Envoi de l'email de notification
  $to = "leo.menestrel52300@gmail.com";
  $subject = "Nouvel avis sur mon site web";
  $message = "Nouvel avis reçu de $name.\n\nNote : $rating étoiles.\n\nCommentaire :\n$comment";
  $headers = "From: $email";

  mail($to, $subject, $message, $headers);

  // Rediriger vers une page de confirmation
  header("Location: avis.html");
  exit();
}
?>
