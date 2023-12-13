<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <div class="container">
        <div class="posts">
            <h1>Posts</h1>
            <?php foreach ($posts as $post) : ?>
            <?= $post ?>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>
