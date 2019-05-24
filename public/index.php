<?php

session_start();

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, ['cache' => false]);

$twig->addGlobal('session', $_SESSION);

if (isset($_GET['post'])) {
    switch ($_GET['post']) {
      case 'home':
         require_once '../controller/home.php';
         break;
      case 'connexion':
         require_once '../controller/connexion.php';
         break;
      case 'about':
         require_once '../controller/about.php';
         break;
      case 'contact':
         require_once '../controller/contact.php';
         break;
      case 'deconnexion':
         require_once '../controller/deconnexion.php';
         break;
      case 'administration':
         require_once '../controller/administration.php';
         break;
      default:
         require_once '../controller/detail.php';
   }
} else {
    header('Location: index.php?post=home');
}
