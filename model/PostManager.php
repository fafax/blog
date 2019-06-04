<?php

namespace App;

use PDO;

class PostManager
{
    public function getAllPost()
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT id_post,title,lede,url_image ,post.create_date, first_name ,last_name  FROM post, user WHERE User_id_user = id_user ORDER BY id_post DESC');
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

    public function getPost(int $id)
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT * FROM post WHERE  id_post = :id ');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $post = $req->fetchObject("App\PostEntity");

        return $post;
    }

    public function deletePost(int $id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('DELETE  FROM  post where id_post= :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function countPost()
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT count(id_post) as counter FROM  post');
        $req->execute();
        $comment = $req->fetchAll(PDO::FETCH_OBJ);

        return $comment[0]->counter;
    }

    public function addPost($title, $lede, $text, $img, $id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('INSERT INTO post (title,lede,text,url_image,create_date,User_id_user) VALUES (:title,:lede,:text,:img,now(),:id)');
        $req->bindParam(':title', $title, PDO::PARAM_STR);
        $req->bindParam(':lede', $lede, PDO::PARAM_STR);
        $req->bindParam(':text', $text, PDO::PARAM_STR);
        $req->bindParam(':img', $img, PDO::PARAM_STR);
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }
}
