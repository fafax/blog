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

/*
   put the array in the object allPost with all comments of post
*/
foreach ($allPost as  $objPost) {
    $anyComments = array();
    foreach ($allComments as  $arrayComments) {
        if ($arrayComments->Post_id_post == $objPost->id_post) {
            $anyComments[] = $arrayComments;
        }
        $objPost->comments = $anyComments;
    }
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
