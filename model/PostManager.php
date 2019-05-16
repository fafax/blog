<?php

namespace App;

use PDO;

class PostManager 
{

   public function getAllPost(){
      $bdd = new Connexion();
      $bd = $bdd->getBd();
      $req = $bd->prepare('SELECT id_post,title,lede,url_image,post.create_date, first_name ,last_name FROM post, user WHERE User_id_user = id_user ORDER BY id_post DESC');
      $req->execute();
      $data = $req->fetchAll(PDO::FETCH_OBJ);
      return $data;
   }

   public function getPost($id){
      $bdd = new Connexion();
      $bd = $bdd->getBd();
      $req = $bd->prepare('SELECT id_post,title,lede,url_image,post.create_date, first_name,text ,last_name FROM post, user WHERE  id_post = :id AND User_id_user = id_user ORDER BY id_post DESC');
      $req->bindParam(":id",$id, PDO::PARAM_INT);
      $req->execute(array("id"=>(int)$id));
      $post = $req->fetchObject("App\PostEntity");
      return $post;
   }

}