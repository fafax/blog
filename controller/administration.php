<?php

require  '../vendor/autoload.php';


$authentificate = true;

if($authentificate)
{
echo $twig->render('administration.html.twig',["title"=>"Administration"]);
}else
{
echo $twig->render('connexion.html.twig');
}


