<?php
function totalPosts($pdo){
    $query = query($pdo, 'SELECT COUNT(*) FROM post');  #Hàm này COUNT(*)đếm tổng số hàng trong bảng
    $row = $query->fetch();
    return $row[0];
}

function query($pdo, $sql, $parameters = []){
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function getPost($pdo, $id) {
    $parameters = [':id' => $id];   #dấu khác để truy cập đối tượng
    $query = query($pdo, 'SELECT * FROM post WHERE id = :id', $parameters); #parameter chứa khóa chính
    return $query->fetch();
}

function updatePost($pdo, $postId, $posttext) {
    $query = 'UPDATE post SET posttext = :posttext WHERE id = :id';
    $parameters = [':posttext' => $posttext, ':id' => $postId];
    query($pdo, $query, $parameters);
}

function deletePost($pdo, $id) {
    $parameters = [':id'=> $id];
    query($pdo, 'DELETE FROM post WHERE id = :id', $parameters);
}

function insertPost($pdo, $posttext, $userid, $moduleid) {
    $query = 'INSERT INTO post (posttext, postdate, userid, moduleid)
    VALUES (:posttext, CURDATE(), :userid, :moduleid)';
    $parameters = [':posttext' => $posttext, ':userid' => $userid, ':moduleid'=> $moduleid];
    query($pdo, $query, $parameters);
}

function allUsers($pdo) {
    $users = query($pdo, 'SELECT * FROM user');
    return $users->fetchALL();
} 

function allModules($pdo) {
    $modules = query($pdo, 'SELECT * FROM module');
    return $modules->fetchALL();
}

function AllPosts($pdo) {
    $query = 'SELECT 
                 post.id, 
                 post.posttext, 
                 post.postdate, 
                 post.image, 
                 user.name AS username, 
                 user.email, 
                 module.moduleName AS modulename
              FROM post
              INNER JOIN user ON post.userid = user.id
              INNER JOIN module ON post.moduleid = module.id';
    $posts = query($pdo, $query);
    return $posts->fetchAll();
}


