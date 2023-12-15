<!DOCTYPE html>
<html lang="en">
<head>
    <title>phpblog</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<header>
    <h1>PHP Blog</h1>
</header>

<div class="top-nav">
    <a href="/phpblog/login">Login</a> | <a href="/phpblog/logout">Logout</a>
</div>
<main>
    <nav>
        <a href="/phpblog">Home</a>
        <a href="/phpblog/add-post">Add New Post</a>
        <a href="/phpblog/add-comment">Information</a>
    </nav>
    <section>
        <h2>Recent Posts</h2>
    <?php
    if (!empty($posts)) {
        echo '<table>';
        echo '<tr><th>Title</th><th>Content</th></tr>';

        foreach ($posts as $post) {
            echo '<tr>';
            echo '<td>' . $post['title'] . '</td>';
            echo '<td>' . $post['text'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No posts found.</p>';
    }
    ?>
    </section>
</main>

<?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
<?php }?>

</body>
</html>


