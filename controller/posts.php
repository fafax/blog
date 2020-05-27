
<?php

require '../vendor/autoload.php';

$postManager = new App\PostManager();

$data = $postManager->getAllPost();

echo $twig->render('allPost.html.twig', ['posts' => $data, 'title' => 'Articles']);
