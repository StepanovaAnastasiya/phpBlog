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

</main>

<?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
<?php }?>

</body>
</html>


