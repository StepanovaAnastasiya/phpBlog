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
            $item = new BlogPost($row);
            $list[] = $item;
        }

        return $list;
    }


}