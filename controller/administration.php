<?php

require  '../vendor/autoload.php';

$connexion = false;
$infoConnexion = false;
$_SESSION['connect'] = false;
$_SESSION["id"]= 0;

if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {
    $admin = new App\Authentificate();
   $infoConnexion= $admin->checkAuthentification($_POST['identifiant'],$_POST['mdp'],"admin");
}

$user = new App\UserManager();
$countUsers = $user->countUser();


if($infoConnexion && isset($_SESSION["admin"])){
   $_SESSION['connect'] = true;
   echo $twig->render('administration.html.twig',["title"=>"Administration"]);
}else if($infoConnexion){
   $_SESSION['connect'] = true;
   header("LOCATION:http://localhost/blog_PHP/public/index.php?post=home");
}else{
   echo $twig->render('connexion.html.twig', ["posts" => "Connexion","title"=> "Connexion","idSession"=>$_SESSION["id"],"countUser"=> $countUsers]);
}


