<?php

require '../vendor/autoload.php';

echo $twig->render('about.html.twig', ['posts' => 'about', 'title' => 'A propos']);
