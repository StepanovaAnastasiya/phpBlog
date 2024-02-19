<?php
namespace Blog\Controllers;

use Blog\Repositories\PostRepository;

class InsertPostController
{

    /**
     * @param $postId
     */
    public function __construct()
    {
    }
    public function process()
    {
        $repos = new PostRepository();
        $repos->insert();
    }
}