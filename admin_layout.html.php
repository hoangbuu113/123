<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../posts.css">
    <title><?=$title?></title>
</head>
<body>
    <header id="admin">
    <h1>Internet Post Admin Area<br />
    Manage posts, users and modules</h1></header>
    <nav>
        <ul>
            <li><a href="../index.php">Public Site</a></li>
            <li><a href="posts.php">Posts List</a></li>
            <li><a href="addpost.php">Add a new post </a></li>
        </ul>
    </nav>
    <main>
        <?=$output?>
    </main>
    <footer>&copy; IJBD 2024</footer>
</body>
</html>