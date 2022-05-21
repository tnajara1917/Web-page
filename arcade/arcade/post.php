<?php include("top.php"); 
    $count = $_GET["count"];
    $post_title;
    $post_text;
    $current_user;
    $forum = $_GET["forum"];
    $file = "forums/".$forum.".txt";
    $posts = file($file);
    $size = sizeof($posts);
    $text;
    if($count > 0){
        for($i = $size - 1; $i > 1; $i--){
            $string = explode(",", $posts[$i]);
            if($string[3] == $count){
                $post_title = $string[0];
                $post_text = $string[1];
                $user = $string[2];
                $text = $post_title;
            }
        }
    }
    else{
        $post_title = $_GET["post_title"];
        $post_text = $_GET["post_text"];
        $user = $_GET["user_name"];
        $forum = $_GET["forum"];
        $count = $size - 2;
        $text = $post_title." ".$post_text." ".$user.",".$count;
        file_put_contents($file, $text, FILE_APPEND);
    }
?>


<div class = "body">
    <h1 id = "post_title"><?=$post_title?></h1>
    <div class = "post_main_body">
        <div class = "post_main_text">
            <h1><?=$user?></h1>
            <section class = "content">
            <?=$post_text?>
            </section>
        </div>
    </div>
    <div class = "comment_area">
        <form action = "comment_submit.php?user=<?$user?>&count=<?=$count?>"> 
            <textarea class = "comment" name = "comment"> Type your comment here</textarea>
            </br>
            <input type = "submit" name = "count" value = "Submit"/>
        </form>
    </div>

    <?php
    for($i = 0; $i < 10; $i++){
        ?>
        <div class = "comment_body">
            <div id = "commenter">
                <h1>username</h1>
            </div>
            <div id = "comment_text">
                <section>asdoakdmlaknd adsnalsdnajds d as d ad s ad a d as s d as d a d s da d  adsd aljnda das ndknjlkdnaskjda djsadnaksj  asjkdnkjsa d ajksdakj dkas dkajsndja dka kdsj ak daj sj a dska daj d ajsdk ak dakj sdajas djka sdk ajkdas s</section>
            </div>
        </div>
        <?php
    }

    ?>
</div>


<?php include("bottom.html"); ?>