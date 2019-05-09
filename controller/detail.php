<?php

require  '../vendor/autoload.php';

$post = new App\PostEntity();
$postManager = new App\PostManager();
$commentManager = new App\CommentManager();
$post = $postManager->getPost($_GET['post']);
$comment = $commentManager->getComment($_GET['post']);


echo $twig->render('detail.html.twig', ['post'=>$post,'comments'=>$comment, "title"=>$post->getTitle(), "count"=>sizeof($comment)]);