<?php
declare(strict_types=1);

$postLoader = new PostLoader();

    if($postLoader->getPosts()){
        $postsArray = $postLoader->getPosts();
    }else{
        $postsArray = [];
    }
    ?>
<form method='post'>
    <input type='number' name='howMany' placeholder="how many posts do you want to see ?">
    <button type='submit'>choose</button>
</form>
<?php
    $i = 0;
    $title = "";
    $author = "";
    $content = "";
    $date = "";
    if(isset($_POST['howMany'])){
        $loops = $_POST['howMany'];
    }
    else{
        $loops = 20;
    }
    $textEmojis = [':)', ':-)', ':(', ':-(', ':D', ':-D', 'xD', ':o', ':-o'];
    $emojis = ['&#128522', '&#128522', '&#128543', '&#128543', '&#128516', '&#128516', '&#128518', '&#128558', '&#128558'];
    $badWords = ['fuck', 'shit', 'ass', 'bitch',];
    $replaceBadWords = ['f*', 'sh*', 'a*', 'b*'];
    foreach(array_reverse($postsArray) as $value){
        $i++;
        echo $title = "<h2>".$value['title']."</h2>";
        echo $author = "<p>".$value['firstName'] ." ".$value['lastName']."</p>";
        $content = $value['content'];
        $filteredContent = str_replace($badWords, $replaceBadWords, $content);
        echo str_replace($textEmojis, $emojis ,$filteredContent)."<br>";
        echo $date = $value['date'];
        if ($i >= $loops) break;
}

?>
<?php
/*echo "<div class='container' >";
function createGrid(){
    echo "<h1>".$title."</h1>";

}
echo "</div>";*/

?>
<div class="row align-items-center">
    <div class="col-12 text-center">
        <form method="get">
            <button class="btn btn-info" type="submit" name="page" value="addMessage">add a message</button>
            <p>&#128572</p>
        </form>
    </div>
</div>


