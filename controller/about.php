<?php

$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, ['cache' => false]);

echo $twig->render('about.html.twig', ['posts' => 'about']);