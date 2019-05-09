<?php

require  '../vendor/autoload.php';


$connexion = true;

$_SESSION['connect'] = false;


if($connexion)
{
   $_SESSION['connect'] = true;
   header("LOCATION:http://localhost/blog_PHP/public/index.php?post=administration");
   
}else
{
 echo $twig->render('connexion.html.twig', ['posts' => 'Connexion','title'=> "Connexion"]);
}