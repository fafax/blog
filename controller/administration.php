<?php

require '../vendor/autoload.php';

$user = new App\UserManager();
$countUsers = $user->countUser();

if (isset($_SESSION['admin'])) {
    echo $twig->render('administration.html.twig', ['title' => 'Administration']);
} else {
    header('LOCATION:index.php?post=home');
}
