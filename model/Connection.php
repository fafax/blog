<?php

class Connection 
{
  
   public function get_bd()
   {
      $bd = new PDO('mysql:host=localhost;dbname=bdd_blog_php;charset=utf8', 'root', '');
      $bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
      return $bd;
   }

}