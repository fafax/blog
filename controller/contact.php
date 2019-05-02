<?php

$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, ['cache' => false]);

echo $twig->render('contact.html.twig', ['posts' => 'test']);