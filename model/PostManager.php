<?php
require "Connection.php";

class PostManager 
{

   public function getAllPost(){
      $bdd = new Connection();
      $bd = $bdd->get_bd();
      $req = $bd->prepare('SELECT id_post,title,lede,url_image,post.create_date, first_name ,last_name FROM post, user WHERE User_id_user = id_user ORDER BY id_post DESC');
      $req->execute();
      $data = $req->fetchAll(PDO::FETCH_OBJ);
      return $data;
   }


}