<?php

class PostLoader {

    public function savePost(){

        $post = new Post($_GET['title'], $_GET['name'], $_GET['surname'], $_GET['message']);
        $file = 'storage.json';
        $postArray = array(
            "firstName" => $post->getFirstName(),
            "lastName" => $post->getLastName(),
            "title" => $post->getTitle(),
            "content" => $post->getContent(),
            "date" => $post->getDate()
        );
        $current = file_get_contents($file);
        $deArr = json_decode($current);
        $deArr[] = $postArray;
        $encodeArr = json_encode($deArr);
        file_put_contents($file, $encodeArr);


    }

    public function getPosts(){

        $file = 'storage.json';
        $JsonPosts = file_get_contents($file, true);
        return $decodedJson = json_decode($JsonPosts, true);
        //for($i = 0; $i < count($decodedJson); $i++){
        //    echo $decodedJson[$i];
        //}

    }
}