<?php
if(isset($_POST['posttext'])){          #hỏi rằng dữ liệu posttext đã đc đặt hay chưa nếu r thì tiếp
    try{
        include 'includes/DatabaseConnection.php';
        include 'includes/DatabaseFunctions.php';

        insertPost($pdo, $_POST['posttext'], $_POST['users'], $_POST['modules']);
        header('location: posts.php');  #chuyển hướng tới database
    }catch (PDOException $e){          
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseFunctions.php';
    $title = 'Add a new post';   
    $users = allUsers($pdo);
    $modules = allModules($pdo);      
    ob_start();
    include 'templates/addpost.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';
?>