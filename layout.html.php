<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="posts.css">
    <title><?=$title?></title>
</head>
<body>
    <header><h1>Internet Post for everyone</h1></header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="posts.php">Posts List</a></li>
            <li><a href="admin/posts.php">Admin </a></li>
        </ul>
    </nav>
    <main>
        <?=$output?>
    </main>
    <footer>&copy; IJBD 2024</footer>
</body>
</html>