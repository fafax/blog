<?php
require  '../vendor/autoload.php';


$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, ['cache' => false]);

$post = new App\PostEntity();
$postManager = new App\PostManager();
$commentManager = new App\CommentManager();
$post = $postManager->getPost($_GET['post']);
$comment = $commentManager->getComment($_GET['post']);


echo $twig->render('detail.html.twig', ['post'=>$post,'comments'=>$comment, "title"=>$post->getTitle(), "count"=>sizeof($comment)]);