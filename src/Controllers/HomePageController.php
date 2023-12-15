<?php
namespace Blog\Controllers;

use Blog\Interfaces\Controller;

class HomePageController implements Controller
{
    public function process()
    {
        require("src/templates/HomePageView.php");
    }
}