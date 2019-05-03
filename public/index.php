<?php
require_once "../vendor/autoload.php";

if(isset($_GET['page'])){
   switch ($_GET['page']) {
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
   require_once '../controller/home.php';
}


