<?php

require '../vendor/autoload.php';

$connexion = false;
$infoConnexion = false;
$_SESSION['connect'] = false;
$_SESSION['id'] = 0;

$user = new App\Authentificate();
$createUser = new App\UserManager();

if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {
    $infoConnexion = $user->checkAuthentification($_POST['identifiant'], $_POST['mdp']);
}

if ($infoConnexion) {
    $connexion = true;
}

if (isset($_POST['newlastname']) && isset($_POST['newFirstname']) && isset($_POST['newEmail']) && isset($_POST['newPwd']) && isset($_POST['newPwd2'])) {
    if ($_POST['newPwd'] === $_POST['newPwd2']) {
        $newUser = new App\userEntity();
        $newUser->setLastName($_POST['newlastname']);
        $newUser->setFirstName($_POST['newFirstname']);
        $newUser->setEmail($_POST['newEmail']);
        $newUser->setPassword($_POST['newPwd']);
        $newUser->setRoleIdRole(2);
        $newUser->setCreateDate(date('Y-m-d'));

        $createUser->add($newUser);
    }
}

if ($connexion) {
    header('LOCATION:index.php?post=home');
} else {
    echo $twig->render('connexion.html.twig', [
      'posts' => 'Connexion',
      'title' => 'Connexion',
      'idSession' => $_SESSION['id'],
      ]);
}
