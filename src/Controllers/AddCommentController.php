<?php
namespace Blog\Controllers;

class AddCommentController
{

    /**
     * @param $postId
     */
    public function __construct($postId)
    {
    }
    public function process()
    {
        echo 'add-comment';
    }
}