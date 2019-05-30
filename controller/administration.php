<?php

require '../vendor/autoload.php';

$users = new App\UserManager();
$countUsers = $users->countUser();
$allUsers = $users->getAllUsers();

$comments = new App\CommentManager();
$countComments = $comments->countComments();
$allComments = $comments->getAllComment();

$post = new App\PostManager();
$allPost = $post->getAllPost();

// Put the array in the object allPost with all comments of post
foreach ($allPost as  $objPost) {
    $anyComments = array();
    foreach ($allComments as  $arrayComments) {
        if ($arrayComments->Post_id_post == $objPost->id_post) {
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

if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === 'deletePost') {
    $post->DeletePost((int) $_GET['id']);
    $allPost = $post->getAllPost();
}

if (isset($_SESSION['admin'])) {
    echo $twig->render('administration.html.twig', [
       'title' => 'Administration',
       'users' => $allUsers,
       'allpost' => $allPost,
       'allComment' => $allComments,
       'countUsers' => $countUsers->counter,
       'countComments' => $countComments->counter,
       ]);
} else {
    header('LOCATION:index.php?post=home');
}
