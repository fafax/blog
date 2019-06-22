<?php

namespace App;

use PDO;

class UserManager
{
    public function getAllUsers(): array
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT id_user,first_name,last_name,create_date,Role_id_role, role,id_role  FROM  User,Role where Role_id_role = id_role ');
        $req->execute();
        $user = $req->fetchAll(PDO::FETCH_OBJ);

        return $user;
    }

    public function getUser(int $id): UserEntity
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT id_user,first_name,last_name,url_img,create_date FROM  User WHERE  id_user = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $user = $req->fetchObject("App\UserEntity");

        return $user;
    }

    public function countUser(): int
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('SELECT count(id_user) as counter FROM  User');
        $req->execute();
        $counter = $req->fetchAll(PDO::FETCH_OBJ);

        return (int) $counter[0]->counter;
    }

    public function deleteUsers($id): void
    {
        $bdd = new Connexion();
        $req = $bdd->getBd()->prepare('DELETE  FROM  User where id_user= :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function add(UserEntity $user): void
    {
        $bdd = new Connexion();
        $response = $bdd->getBd()->prepare('INSERT INTO User (first_name,last_name,email,create_date, password,Role_id_role ) VALUES(:firstname,:lastname,:email,:createDate, :password, :role)');
        $response->bindValue(':firstname', $user->getFirstName());
        $response->bindValue(':lastname', $user->getLastName());
        $response->bindValue(':email', $user->getEmail());
        $response->bindValue(':createDate', $user->getCreateDate());
        $response->bindValue(':password', $user->getPassword());
        $response->bindValue(':role', $user->getRoleIdRole());
        $response->execute();
    }
}

