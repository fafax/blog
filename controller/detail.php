<?php

require  '../vendor/autoload.php';

$postManager = new App\PostManager();
$userManager = new App\UserManager();
$commentManager = new App\CommentManager();
$post = $postManager->getPost($_GET['post']);
$comment = $commentManager->getComment($_GET['post']);
$user = $userManager->getUser($_GET['post']);


if(isset($_POST["comment"]) && isset($_SESSION["id"])){
   $commentManager->addComment($_GET['post'],$_POST["comment"],$_SESSION["id"]);
}


echo $twig->render('detail.html.twig', 
   [
      'post'=>$post,
      'comments'=>$comment,
      'user' => $user,
      "title"=>$post->getTitle(),
      "count"=>sizeof($comment)
   ]);