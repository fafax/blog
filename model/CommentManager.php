<?php

namespace App;

use PDO;

class CommentManager
{
    public function getComment(int $id)
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT id_comment,text,comment.create_date,status, first_name, last_name
                           FROM comment, user ,status
                           WHERE Post_id_post = :id AND Status_id_status =1 AND comment.Status_id_status = status.id_status AND comment.User_id_user = user.id_user
                           ORDER BY id_comment DESC');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $comments = $req->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }

    public function getAllComment()
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT id_comment,comment.text,comment.create_date,status, first_name, last_name,Post_id_post
                           FROM comment, user ,status
                           WHERE  comment.Status_id_status = status.id_status AND comment.User_id_user = user.id_user
                           ORDER BY id_comment DESC');

        $req->execute();
        $comments = $req->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }

    public function addComment(int $id, string $comment, int $user_id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('INSERT INTO comment (text,create_date,Status_id_status,Post_id_post,User_id_user) values (:comment,DATE(NOW()),3,:id,:userId )');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->bindParam(':userId', $user_id, PDO::PARAM_INT);
        $req->bindParam(':comment', $comment, PDO::PARAM_STR);
        $req->execute();
    }

    public function validateComment(int $id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('UPDATE comment set Status_id_status = 1 WHERE id_comment = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function invalidateComment(int $id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('UPDATE comment set Status_id_status = 2 WHERE id_comment = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function deleteComment(int $id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('DELETE  FROM  comment where id_comment= :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }
}
