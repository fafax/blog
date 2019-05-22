<?php

require  '../vendor/autoload.php';


$connexion = false;

$_SESSION['connect'] = false;

if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {
    $user = new App\AuthentificateVisitor();
    $infoConnexion = $user->checkAuthentification($_POST['identifiant'],$_POST['mdp']);
}

if($infoConnexion){
   $connexion = true;
}


if($connexion)
{
   $_SESSION['connect'] = true;
   header("LOCATION:http://localhost/blog_PHP/public/index.php?post=home");
   
}else
{
 echo $twig->render('connexion.html.twig', ['posts' => 'Connexion','title'=> "Connexion"]);
}