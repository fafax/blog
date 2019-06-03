<?php

namespace App;

class Authentificate
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
        $user->setId($this->base->lastInsertId());
    }

    public function find(int $id)
    {
        $bdd = new Connexion();
        $bd = $bdd->getBd();
        $response = $bd->prepare('SELECT * FROM user WHERE id_user = :id');
        $response->bindValue(':id', $id);
        $response->execute();

        return $response->fetchObject('App\userEntity');
    }

    public function findByEmail(string $email)
    {
        $bdd = new Connexion();
        $bd = $bdd->getBd();
        $response = $bd->prepare('SELECT * FROM user WHERE email = :email');
        $response->bindValue(':email', $email);
        $response->execute();

        return $response->fetch();
    }

    public function checkAuthentification(string $email, string $password)
    {
        if ($result = $this->findByEmail($email)) {
            // if (password_verify($password, $result['password'])) {
            $user = $this->find($result['id_user']);
            if ($email == $user->getEmail() && $password == $user->getPassword()) {
                $_SESSION['id'] = $user->getIdUser();
                if ($user->getRoleIdRole() == 1) {
                    // if id and mdp and (id_role is egale adiminstrator) is correct then connect session and show link administration
                    $_SESSION['admin'] = true;
                }
                // if id and mdp is correct then connect session
                $_SESSION['connect'] = true;

                return true;
            }
            // }
         // return false;
        }
        $_SESSION['id'] = 'noConnect';

        return false;
    }
}
