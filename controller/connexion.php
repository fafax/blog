<?php

require  '../vendor/autoload.php';

$connexion = false;
$infoConnexion = false;
$_SESSION['connect'] = false;
$_SESSION["id"]= 0;

if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {
    $user = new App\Authentificate();
   $infoConnexion= $user->checkAuthentification($_POST['identifiant'],$_POST['mdp'],"");
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
 echo $twig->render('connexion.html.twig', ["posts" => "Connexion","title"=> "Connexion","idSession"=>$_SESSION["id"]]);
}