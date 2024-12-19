<!-- <?php session_start(); ?> -->
<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
</head>

<body>
    <h1>Hello, <?php echo $_SESSION['username']; ?></h1><h1><a href="/">Log out</a></h1>
    
    <hr>
    <h2>Post List</h2>
    <a href="/posts/create">Create New Post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="/posts/show?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                <a href="/posts/edit?id=<?= $post['id'] ?>">Edit</a>
                <a href="/posts/delete?id=<?= $post['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>