<?php

namespace App;

class AuthentificateVisitor 
{

    public function add(User $user)
    {
      $bdd = new Connexion();
      $bd = $bdd->getBd();
      $response = $bd->prepare('INSERT INTO user (name, password, email) VALUES(:name, :password, :email)');
      $response->bindValue(':name', $user->getName());
      $response->bindValue(':password', $user->getPassword());
      $response->bindValue(':email', $user->getEmail());
      $response->execute();
      //$user->setId($this->base->lastInsertId());
    }


    public function find(int $id)
    {
      $bdd = new Connexion();
      $bd = $bdd->getBd();
      $response = $bd->prepare('SELECT * FROM user WHERE id = :id');
      $response->bindValue(':id', $id);
      $response->execute();
      return $response->fetchObject('App\userEntity');
    }


    public function findByEmail(string $email)
    {
        $response = $this->base->prepare('SELECT * FROM user WHERE email = :email');
        $response->bindValue(':email', $email);
        $response->execute();
        return $response->fetch();
    }


    public function checkAuthentification(string $email, string $password)
    {
        if ($result = $this->findByEmail($email)) {
            if (password_verify($password, $result['password'])) {
                $user = $this->find($result['id']);
                $_SESSION['id'] = $user->getId();
                $_SESSION['connect'] = true;
                return $user;
            }
            return false;
        }
        return false;
    }
   
}