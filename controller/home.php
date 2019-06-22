<?php

require '../vendor/autoload.php';

$postManager = new App\PostManager();

$data = $postManager->getAllPost();

if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {
}

echo $twig->render('home.html.twig', ['posts' => $data, 'title' => 'Articles']);




