<?php

namespace App;

use PDO;

class CommentManager
{
    public function getComment(int $id): array
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT id_comment,text,Comment.create_date,status, first_name, last_name
                           FROM Comment, User ,status
                           WHERE Post_id_post = :id AND Status_id_status =1 AND Comment.Status_id_status = Status.id_status AND Comment.User_id_user = User.id_user
                           ORDER BY id_comment DESC');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $comments = $req->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }

    public function getAllComment(): array
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT id_comment,Comment.text,Comment.create_date,status, first_name, last_name,Post_id_post
                           FROM Comment, User ,Status
                           WHERE  Comment.Status_id_status = Status.id_status AND Comment.User_id_user = User.id_user
                           ORDER BY id_comment DESC');

        $req->execute();
        $comments = $req->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }

    public function addComment(int $id, string $comment, int $user_id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('INSERT INTO Comment (text,create_date,Status_id_status,Post_id_post,User_id_user) values (:comment,DATE(NOW()),3,:id,:userId )');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->bindParam(':userId', $user_id, PDO::PARAM_INT);
        $req->bindParam(':comment', $comment, PDO::PARAM_STR);
        $req->execute();
    }

    public function validateComment(int $id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('UPDATE Comment set Status_id_status = 1 WHERE id_comment = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function invalidateComment(int $id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('UPDATE Comment set Status_id_status = 2 WHERE id_comment = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function deleteComment(int $id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('DELETE  FROM  Comment where id_comment= :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }
}
