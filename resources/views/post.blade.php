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
        <article>
            <h1>{{ $post->title }}</h1>

            <?= $post->body ?>
            <a href="/">Go Back</a>
        </article>
    </div>
</body>

</html>
