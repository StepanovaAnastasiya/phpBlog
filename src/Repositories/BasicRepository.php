<?php
namespace Blog\Repositories;

class BasicRepository{

    protected $db;

    public function __construct()
    {
        $this->db = $GLOBALS['db'];
    }

}