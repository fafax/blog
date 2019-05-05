<?php
require_once "../vendor/autoload.php";

if(isset($_GET['post'])){
   switch ($_GET['post']) {
      case 'home':
         require_once '../controller/home.php';
         break;
      case 'about':
         require_once '../controller/about.php';
         break;
      case 'contact':
         require_once '../controller/contact.php';
         break;
      case 'administration':
         require_once '../controller/administration.php';
         break;
      default:
         require_once '../controller/detail.php';
   }
}else{
   header('Location: index.php?post=home'); 
}


