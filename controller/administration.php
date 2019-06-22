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

$reponse = null;
$extensions_valides = array('jpg', 'jpeg', 'png');

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
    $users->deleteUsers((int) $_GET['id']);
    $allUsers = $users->getAllUsers();
}

// Delete post in administration page with id_post and refrech page
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === 'deletePost') {
    $post->deletePost((int) $_GET['id']);
    $allPost = $post->getAllPost();
}

// Update system post if change image
if (isset($_FILES['updateImg']) && !empty($_FILES['updateImg']['name'])) {
    $extension_upload = strtolower(substr(strrchr($_FILES['updateImg']['name'], '.'), 1));
    if (in_array($extension_upload, $extensions_valides)) {
        $resultat = move_uploaded_file($_FILES['updateImg']['tmp_name'], './assets/ressources/img/'.$_FILES['updateImg']['name']);

        $updatePost = $post->getPost((int) $_POST['updateId']);
        $updatePost->setTitle($_POST['updateTitle']);
        $updatePost->setLede($_POST['updateLede']);
        $updatePost->setText($_POST['updateText']);
        $updatePost->setUrlImage($_FILES['updateImg']['name']);
        $post->updatePost($updatePost);
        $allPost = $post->getAllPost();
    }
}
// Update system post if don't change image
if ((isset($_POST['updateTitle']) || isset($_POST['updateLede']) || isset($_POST['updateText'])) && strlen($_FILES['updateImg']['name']) === 0) {
    $updatePost = $post->getPost((int) $_POST['updateId']);
    $updatePost->setTitle($_POST['updateTitle']);
    $updatePost->setLede($_POST['updateLede']);
    $updatePost->setText($_POST['updateText']);
    $post->updatePost($updatePost);
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

if (isset($_FILES['newImg']) && !empty($_FILES['newImg'])) {
    $extension_upload = strtolower(substr(strrchr($_FILES['newImg']['name'], '.'), 1));
    if (in_array($extension_upload, $extensions_valides)) {
        $resultat = move_uploaded_file($_FILES['newImg']['tmp_name'], './assets/ressources/img/'.$_FILES['newImg']['name']);
        $newPost = new App\PostEntity();
        $newPost->setTitle($_POST['newTitle']);
        $newPost->setLede($_POST['newLede']);
        $newPost->setText($_POST['newText']);
        $newPost->setUrlImage($_FILES['newImg']['name']);
        $newPost->setCreateDate(date('Y-m-d'));
        $newPost->setUserIdUser((int) $_SESSION['id']);

        $post->addPost($newPost);
    }
}

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
