<?php

require  '../vendor/autoload.php';


$messageEmail = null;
$class = null;


if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])){
   $to = "fabienhamayon@free.fr";
   $subject = "Message envoyer du formulaire de contact";

   $message="<html><head></head><body>". htmlentities($_POST["message"]) ."<br>".htmlentities($_POST["name"])."</body></html>";

   $headers  = 'From:'.htmlentities($_POST["email"]) . "\r\n";
   $headers  .= 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

   if(mail($to, $subject, $message, $headers)){
      $messageEmail = "Votre email a bien été envoyé.";
      $class = "sendMail";
   }else{
      $messageEmail = "Une erreur c'est produite lors de l'envoi de votre email.";
      $class = "errorSendMail";
   }
}

echo $twig->render('contact.html.twig', ['message' => $messageEmail,'title'=> "Contact", "class"=> $class]);



