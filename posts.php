<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseFunctions.php';

    $posts = allPosts($pdo); #truy vấn sql ở trên
    $title = 'Post list';
    $totalPosts = totalPosts($pdo);    #tạo 1 biến mới vs truyền pdo làm đối số

    ob_start();
    include 'templates/posts.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';