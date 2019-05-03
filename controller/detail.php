<?php

$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, ['cache' => false]);


echo $twig->render('detail.html.twig', ['post' => $_GET['page'],'title'=> "Article ".$_GET['page']]);