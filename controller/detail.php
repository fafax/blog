<?php
require  '../vendor/autoload.php';


$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, ['cache' => false]);

$post = new App\PostEntity();
$postManager = new App\PostManager();
$post = $postManager->getPost($_GET['post']);
$comment = $postManager->getComment($_GET['post']);


echo $twig->render('detail.html.twig', ['post'=>$post,'comment'=>$comment, "title"=>$post->getTitle()]);