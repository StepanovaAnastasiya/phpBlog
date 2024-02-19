<?php include "src/templates/include/header.php" ?>

    <section>
        <form action="/phpblog/insert-post" method="post">
            <label for="title">
                Post title:<br>
                <input type="text" name="title" size="40" required>
            </label>
            <br>
            <label for="content">
                Post content:<br>
                <textarea name="content" required rows="4" cols="50"></textarea>
            </label>
            <input type="submit" value="Save post" name ="submit"/>
        </form>
    </section>

<?php include "src/templates/include/footer.php" ?>


