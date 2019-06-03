<?php

require '../vendor/autoload.php';

$users = new App\UserManager();
$countUsers = $users->countUser();
$allUsers = $users->getAllUsers();

$comments = new App\CommentManager();
$allComments = $comments->getAllComment();

$post = new App\PostManager();
$allPost = $post->getAllPost();
$countPost = $post->countpost();

$confimDelete = false;

// Put the array in the object allPost with all comments of post
foreach ($allPost as  $objPost) {
    $anyComments = array();
    foreach ($allComments as  $arrayComments) {
        if ($arrayComments->Post_id_post === $objPost->id_post) {
            $anyComments[] = $arrayComments;
        }
        $objPost->comments = $anyComments;
    }
}

// Delete user in administration page with id_user and refrech page
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === 'deleteUser') {
    $users->DeleteUsers((int) $_GET['id']);
    $allUsers = $users->getAllUsers();
}

// Delete post in administration page with id_post and refrech page
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === 'deletePost') {
    $post->DeletePost((int) $_GET['id']);
    $allPost = $post->getAllPost();
}

// invalid comment in administration page with id_post and refrech page
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === 'invalidComment') {
    $comments->invalidateComment((int) $_GET['id']);
    $allComments = $comments->getAllComment();
}

// valide comment in administration page with id_post and refrech page
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === 'valideComment') {
    $comments->validateComment((int) $_GET['id']);
    $allComments = $comments->getAllComment();
}
// delete comment in administration page with id_post and refrech page
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === 'deleteComment') {
    $comments->deleteComment((int) $_GET['id']);
    $allComments = $comments->getAllComment();
}

$reponse = null;
$extensions_valides = array('jpg', 'jpeg', 'png');

if (isset($_FILES) && !empty($_FILES)) {
    $extension_upload = strtolower(substr(strrchr($_FILES['newImg']['name'], '.'), 1));
    if (in_array($extension_upload, $extensions_valides)) {
        $resultat = move_uploaded_file($_FILES['newImg']['tmp_name'], '../public/assets/ressources/img/'.$_FILES['newImg']['name']);
        $post->addPost($_POST['newTitle'], $_POST['newLede'], $_POST['newText'], $_FILES['newImg']['name'], $_SESSION['id']);
    }
}

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';

if (isset($_SESSION['admin'])) {
    echo $twig->render('administration.html.twig', [
       'title' => 'Administration',
       'users' => $allUsers,
       'allpost' => $allPost,
       'allComment' => $allComments,
       'countUsers' => $countUsers,
       'countPost' => $countPost,
       ]);
} else {
    header('LOCATION:index.php?post=home');
}
