<?php

namespace App;

use PDO;

class UserManager
{
    public function getAllUsers()
    {
        $bdd = new Connexion();
        $bd = $bdd->getBd();
        $req = $bd->prepare('SELECT id_user,first_name,last_name,create_date,Role_id_role, role,id_role  FROM  user,role where Role_id_role = id_role ');
        $req->execute();
        $user = $req->fetchAll(PDO::FETCH_OBJ);

        return $user;
    }

    public function getUser($id)
    {
        $bdd = new Connexion();
        $bd = $bdd->getBd();
        $req = $bd->prepare('SELECT id_user,first_name,last_name,url_img,create_date FROM  user WHERE  id_user = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $user = $req->fetchObject("App\UserEntity");

        return $user;
    }

    public function countUser()
    {
        $bdd = new Connexion();
        $bd = $bdd->getBd();
        $req = $bd->prepare('SELECT count(id_user) as counter FROM  user');
        $req->execute();
        $counter = $req->fetchAll(PDO::FETCH_OBJ);

        return $counter[0]->counter;
    }

    public function DeleteUsers($id)
    {
        $bdd = new Connexion();
        $bd = $bdd->getBd();
        $req = $bd->prepare('DELETE  FROM  user where id_user= :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }
}
