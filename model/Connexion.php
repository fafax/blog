<?php

namespace App;

use PDO;

class Connexion 
{
  
   public function getBd()
   {
      $bd = new PDO('mysql:host=localhost;dbname=bdd_blog_php;charset=utf8', 'root', '');
      $bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
      return $bd;
   }

}