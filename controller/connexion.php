<?php

require  '../vendor/autoload.php';


$connexion = false;

$_SESSION['connect'] = false;

if (isset($_POST['email']) && isset($_POST['password'])) {
    $user = new App\AuthentificateVisito();
    $infoConnexion = $user->checkAuthentification($_POST['email'],$_POST['password']);
    exit;
}




if($connexion)
{
   $_SESSION['connect'] = true;
   header("LOCATION:http://localhost/blog_PHP/public/index.php?post=home");
   
}else
{
 echo $twig->render('connexion.html.twig', ['posts' => 'Connexion','title'=> "Connexion"]);
}