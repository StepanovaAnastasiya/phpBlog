<?php
namespace Blog\Controllers;

use Blog\Interfaces\Controller;
use Blog\Repositories\PostRepository;

class HomePageController implements Controller
{
    public function process()
    {
        $repos = new PostRepository();
        $posts = $repos->getAllPosts();
        require("src/templates/HomePageView.php");
    }
}