<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';
try{
    if(isset($_POST['posttext'])){
        updatePost($pdo, $_POST['postid'], $_POST['posttext']);
        header('location: posts.php');
       
    }else{
        $post = getPost($pdo, $_GET['id']);
        $title = 'Edit post';

        ob_start();
        include 'templates/editpost.html.php';
        $output = ob_get_clean();
    }
}catch(PDOException $e){
    $title = 'Error has occured';
    $output = 'Error editing post: ' . $e->getMessage();
}
include 'templates/layout.html.php';
?>