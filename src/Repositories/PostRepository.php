<?php
namespace Blog\Repositories;

use Blog\Classes\BlogPost;

class PostRepository extends BasicRepository{

    public function getAllPosts($limit = 10){
        $sql = "SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT ".$limit;
        $query = $this->db->prepare($sql);
        $query->execute();
        $list = [];
        while ($row = $query->fetch()) {
            $list[] = $row;
        }

        return $list;
    }

    public function insert(){
        $post = [];
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $title = htmlspecialchars($_POST['title']);
            $content = htmlspecialchars($_POST['content']);
        }
        $sql = "INSERT INTO blog_posts (title, text) VALUES (?,?)";
        $stmt= $this->db->prepare($sql);
        $stmt->execute([$title, $content]);
        header("Location: /phpblog/");

    }




}