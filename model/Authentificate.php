<?php

namespace App;

class Authentificate
{
    public function test()
    {
        return 'hello';
    }

    public function add($user): void
    {
        $bdd = new Connexion();
        $response = $bdd->getBd()->prepare('INSERT INTO user (first_name,last_name,email,create_date, password,Role_id_role ) VALUES(:firstname,:lastname,:email,:createDate, :password, :role)');
        $response->bindValue(':firstname', $user->getFirstName());
        $response->bindValue(':lastname', $user->getLastName());
        $response->bindValue(':email', $user->getEmail());
        $response->bindValue(':createDate', $user->getCreateDate());
        $response->bindValue(':password', $user->getPassword());
        $response->bindValue(':role', $user->getRoleIdRole());
        $response->execute();
    }

    public function find(int $id)
    {
        $bdd = new Connexion();
        $response = $bdd->getBd()->prepare('SELECT * FROM user WHERE id_user = :id');
        $response->bindValue(':id', $id);
        $response->execute();

        return $response->fetchObject('App\userEntity');
    }

    public function findByEmail(string $email)
    {
        $bdd = new Connexion();
        $response = $bdd->getBd()->prepare('SELECT * FROM user WHERE email = :email');
        $response->bindValue(':email', $email);
        $response->execute();

        return $response->fetch();
    }

    public function checkAuthentification(string $email, string $password)
    {
        if ($result = $this->findByEmail($email)) {
            // if (password_verify($password, $result['password'])) {
            $user = $this->find($result['id_user']);
            if ($email == $user->getEmail() && $password === $user->getPassword()) {
                $_SESSION['id'] = $user->getIdUser();
                if ($user->getRoleIdRole() === '1') {
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
