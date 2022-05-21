<?php
    //placeholder while we set up the database and retrieve info that way
    //clears error messages just to layout the page
    error_reporting(E_ERROR | E_PARSE);
    $game = $_GET["game"];
    $file = "forums/".$game.".txt";
    $posts = file($file);
    $info = explode(",", $posts[0]);
    $title = $info[0];
    $size = sizeof($posts);
    include("top.php");
?>
<section class = "forum_banner">
    <h1><?=$title?></h1>
</section>
<!-- this is a div to contain all the post that will be featured on the forum page -->
<?php
    //if($is_logged){
        ?>
        <div class = "comment_area">
            <form action = "post.php"> 
                <input type = "hidden" name = "forum" value = "<?=$game?>">
                <input type = "text" name = "post_title" value = "post title" maxlength="10" > 
                <textarea class = "comment" name = "post_text"> Type your comment here</textarea>
                </br>
                <input type = "submit" name = "comment" value = "<?=$username?>"/>
            </form>
        </div>
        <?php
   //}
?>


<?php
    for($i = $size - 1; $i > 1; $i--){
        $string = explode(",", $posts[$i]);
        ?>
        <a href = "post.php?count=<?=$i - 1?>&forum=<?=$game?>">
            <div class = "top_post_body">
                <div class = "post_body">
                    <div id = "username">
                        <h2><?=$string[2]?></h2>
                    </div>
                    <div class = "post_title">
                        <h1><?=$string[0]?></h1>
                    </div>
                    <div class = "post_text">
                        <p><?=$string[1]?></p>
                    </div>
                </div>
            </div>
        </a>
        <?php
    }
?>



<?php include("bottom.html"); ?>