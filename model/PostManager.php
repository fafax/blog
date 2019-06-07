<?php

namespace App;

use PDO;

class PostManager
{
    public function getAllPost(): array
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT id_post,title,lede,url_image ,post.create_date, first_name ,last_name  FROM post, user WHERE User_id_user = id_user ORDER BY id_post DESC');
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

    public function getPost(int $id): PostEntity
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

    public function countPost(): int
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT count(id_post) as counter FROM  post');
        $req->execute();
        $comment = $req->fetchAll(PDO::FETCH_OBJ);

        return (int) $comment[0]->counter;
    }

    public function addPost(PostEntity $post): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('INSERT INTO post (title,lede,text,url_image,create_date,User_id_user) VALUES (:title,:lede,:text,:img,:createDate,:id)');
        $req->bindValue(':title', $post->getTitle(), PDO::PARAM_STR);
        $req->bindValue(':lede', $post->getLede(), PDO::PARAM_STR);
        $req->bindValue(':text', $post->getText(), PDO::PARAM_STR);
        $req->bindValue(':img', $post->getUrlImage(), PDO::PARAM_STR);
        $req->bindValue(':createDate', $post->getCreateDate(), PDO::PARAM_STR);
        $req->bindValue(':id', $post->getUserIdUser(), PDO::PARAM_INT);
        $req->execute();
    }
}
