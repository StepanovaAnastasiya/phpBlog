<?php
namespace Blog\Controllers;

use Blog\Repositories\PostRepository;

class AddPostController
{
    public function process()
    {
        require("src/templates/AppPostView.php");
    }
}