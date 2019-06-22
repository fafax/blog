<?php

namespace App;

use PDO;

class PostManager
{
    public function getAllPost(): array
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT id_post,title,lede,url_image,text ,Post.create_date, first_name ,last_name  FROM Post, User WHERE User_id_user = id_user ORDER BY id_post DESC');
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

    public function getPost(int $id): PostEntity
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT * FROM Post WHERE  id_post = :id ');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $post = $req->fetchObject("App\PostEntity");

        return $post;
    }

    public function deletePost(int $id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('DELETE  FROM  Post where id_post= :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function countPost(): int
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT count(id_post) as counter FROM  Post');
        $req->execute();
        $comment = $req->fetchAll(PDO::FETCH_OBJ);

        return (int) $comment[0]->counter;
    }

    public function addPost(PostEntity $post): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('INSERT INTO Post (title,lede,text,url_image,create_date,User_id_user) VALUES (:title,:lede,:text,:img,:createDate,:id)');
        $req->bindValue(':title', $post->getTitle(), PDO::PARAM_STR);
        $req->bindValue(':lede', $post->getLede(), PDO::PARAM_STR);
        $req->bindValue(':text', $post->getText(), PDO::PARAM_STR);
        $req->bindValue(':img', $post->getUrlImage(), PDO::PARAM_STR);
        $req->bindValue(':createDate', $post->getCreateDate(), PDO::PARAM_STR);
        $req->bindValue(':id', $post->getUserIdUser(), PDO::PARAM_INT);
        $req->execute();
    }

    public function updatePost(PostEntity $post): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('UPDATE Post set title = :title, lede =:lede, text = :text, url_image = :img where id_post= :id');
        $req->bindValue(':title', $post->getTitle(), PDO::PARAM_STR);
        $req->bindValue(':lede', $post->getLede(), PDO::PARAM_STR);
        $req->bindValue(':text', $post->getText(), PDO::PARAM_STR);
        $req->bindValue(':img', $post->getUrlImage(), PDO::PARAM_STR);
        $req->bindValue(':id', $post->getIdPost(), PDO::PARAM_INT);
        $req->execute();
    }
}


