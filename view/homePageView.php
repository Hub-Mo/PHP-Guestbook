<?php
declare(strict_types=1);

$postLoader = new PostLoader();

    if($postLoader->getPosts()){
        $postsArray = $postLoader->getPosts();
    }else{
        $postsArray = [];
    }
    ?>

<div class="row align-items-center">
    <div class="col-12 text-center">
        <form method="get">
            <button class="btn btn-info" type="submit" name="page" value="addMessage">add a message</button>
        </form>
        <form method='post'>
            <input type='number' name='howMany' placeholder="how many posts do you want to see ?">
            <button type='submit'>choose</button>
        </form>
    </div>
</div>
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
//        $i++;
//        echo $title = "<h2>".$value['title']."</h2>";
//        echo $author = "<p>".$value['firstName'] ." ".$value['lastName']."</p>";
//        $content = $value['content'];
//        $filteredContent = str_replace($badWords, $replaceBadWords, $content);
//        str_replace($textEmojis, $emojis ,$filteredContent);
//        echo $date = $value['date'];
//        if ($i >= $loops) break;
}

?>

<div class="container mt-5">
    <div class="row">
        <?php foreach(array_reverse($postsArray) as $value): ?>
        <?php $i++;
        $content = $value['content'];
        $firstName = $value['firstName'];
        $lastName = $value['lastName'];
        $filteredContent = str_replace($badWords, $replaceBadWords, $content);
        str_replace($textEmojis, $emojis ,$filteredContent);
        ?>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="https://picsum.photos/70" alt="random image">
                    <div class="d-flex flex-column ml-2"><span><?= str_replace($badWords, $replaceBadWords, $value['title']) ?></span><span class="text-black-50"><?= str_replace($badWords, $replaceBadWords, $firstName)." ".str_replace($badWords, $replaceBadWords, $lastName) ?></span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                </div>
                <h6> <?= str_replace($textEmojis, $emojis ,$filteredContent); ?></h6>
                <div class="d-flex justify-content-between install mt-3"><span><?= $value['date'] ?></span></div>
            </div>
        </div>
        <?php if ($i >= $loops) break;
        endforeach; ?>
    </div>
</div>



