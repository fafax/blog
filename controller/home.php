<?php
require "../model/PostManager.php";

$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, ['cache' => false]);



 
$postManager = new PostManager();

$data = $postManager->getAllPost();

echo $twig->render('home.html.twig', ['posts' => $data]);