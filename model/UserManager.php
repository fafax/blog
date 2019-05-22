<?php

namespace App;

use PDO;

class UserManager 
{

   public function getUser($id){
   $bdd = new Connexion();
   $bd = $bdd->getBd();
   $req = $bd->prepare('SELECT id_user,first_name,last_name,url_img,create_date FROM  user WHERE  id_user = :id');
   $req->bindParam(":id",$id, PDO::PARAM_INT);
   $req->execute(array("id"=>(int)$id));
   $user = $req->fetchObject("App\UserEntity");
   return $user;
}

}