<?php

require  '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, ['cache' => false]);

$authentificate = true;

if($authentificate)
{
echo $twig->render('administration.html.twig', ['posts' => 'Aministration','title'=> "Administration"]);
}else
{
echo $twig->render('formAdministration.html.twig', ['posts' => 'Aministration','title'=> "Administration"]);
}