<?php include "src/templates/include/header.php" ?>

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

<?php include "src/templates/include/footer.php" ?>


