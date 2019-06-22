<?php

namespace App;

class Authentificate
{
    public function find(int $id): UserEntity
    {
        $bdd = new Connexion();
        $response = $bdd->getBd()->prepare('SELECT * FROM User WHERE id_user = :id');
        $response->bindValue(':id', $id);
        $response->execute();

        return $response->fetchObject('App\UserEntity');
    }

    public function findByEmail(string $email): array
    {
        $bdd = new Connexion();
        $response = $bdd->getBd()->prepare('SELECT * FROM User WHERE email = :email');
        $response->bindValue(':email', $email);
        $response->execute();

        return $response->fetch();
    }

    public function checkAuthentification(string $email, string $password): bool
    {
        if ($result = $this->findByEmail($email)) {
            $user = $this->find($result['id_user']);
            if (password_verify($password, $result['password']) && $email == $user->getEmail()) {
                $_SESSION['id'] = $user->getIdUser();
                if ($user->getRoleIdRole() === 1) {
                    // if id and mdp and (id_role is egale adiminstrator) is correct then connect session and show link administration
                    $_SESSION['admin'] = true;
                }
                // if id and mdp is correct then connect session
                $_SESSION['connect'] = true;

                return true;
            }
        }
        $_SESSION['id'] = 'noConnect';

        return false;
    }
}


