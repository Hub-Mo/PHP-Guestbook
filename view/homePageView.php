<?php
declare(strict_types=1);

$postLoader = new PostLoader();
//print_r( $postLoader->getPosts());

    $postsArray = $postLoader->savePost();
    foreach($postsArray as $value){
        echo $value['firstName'] ." ".$value['lastName']."<br>";
        echo $value['title']." - ".$value['date']."<br>";
        echo $value['content'];
        echo "<br>";
        echo "<br>";
}

?>



<div class="row align-items-center">
    <div class="col-12 text-center">
        <form method="get">
            <button class="btn btn-info" type="submit" name="page" value="addMessage">add a message</button>
        </form>
    </div>
</div>


