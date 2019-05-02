<?php
require "Connection.php";

class PostManager 
{

   public function getAllPost(){
      $bdd = new Connection();
      $bd = $bdd->get_bd();
      $req = $bd->prepare('SELECT * from post ORDER BY  id_post DESC');
      $req->execute();
      $data = $req->fetchAll(PDO::FETCH_OBJ);
      return $data;
   }


}