<?php

require 'model/post.php';
require 'model/postLoader.php';
class controller{

    public $page;

    public function __construct()
    {
        $this->page = 'HomePage';
    }


    public function invoce(){

            if(isset($_GET['page'])) {
                $this->page = $_GET['page'];
            }
                switch ($this->page) {
                    case 'HomePage':
                        include 'view/homePageView.php';
                        break;
                    case 'addMessage':
                        include 'view/addMessage.php';
                        break;
                    default:
                        include 'view/homePageView.php';
                        break;
                }
        if(isset($_GET['send'])){
                $postLoader = new PostLoader();
                $postLoader->savePost();
                $postLoader->getPosts();
            }
}



}

