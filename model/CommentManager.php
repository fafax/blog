<?php

namespace App;

use PDO;

class CommentManager
{
      public function getComment($id){
      $bdd = new Connection();
      $bd = $bdd->get_bd();
      $req = $bd->prepare('SELECT id_comment,text,comment.create_date,status, first_name, last_name
                           FROM comment, user ,status
                           WHERE Post_id_post = :id AND Status_id_status =1 AND comment.Status_id_status = status.id_status AND comment.Post_id_post = user.id_user
                           ORDER BY id_comment DESC');
      $req->bindParam(":id", $id, PDO::PARAM_INT);
      $req->execute(array("id"=> (int)$id));
      $comments = $req->fetchAll(PDO::FETCH_OBJ);
      return $comments;
   }
}