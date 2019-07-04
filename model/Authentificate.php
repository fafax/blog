<?php

namespace App;

class Authentificate
{
    public function findByEmail(string $email): UserEntity
    {
        $bdd = new Connexion();
        $response = $bdd->getBd()->prepare('SELECT * FROM User WHERE email = :email');
        $response->bindValue(':email', $email);
        $response->execute();

        return $response->fetchObject('App\UserEntity');
    }

    public function checkPassword(string $email, string $password, UserEntity $user): bool
    {
        if (password_verify($password, $user->getPassword()) && $email == $user->getEmail()) {
            return true;
        } else {
            return false;
        }
    }

    public function checkAdmin(int $userId)
    {
        if ($userId === 1) {
            $_SESSION['admin'] = true;
        }
    }

    public function checkAuthentification(string $email, string $password): bool
    {
        $user = $this->findByEmail($email);
        if ($this->checkPassword($email, $password, $user)) {
            $_SESSION['id'] = $user->getIdUser();

            $this->checkAdmin($user->getRoleIdRole());

            $_SESSION['connect'] = true;

            return true;
        } else {
            $_SESSION['id'] = 'noConnect';

            return false;
        }
    }
}
