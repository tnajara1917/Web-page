<?php
    include("top.php");
?>


<?php
    $comment = $_GET["comment"];
    $game =  $_GET["game"];
    $file = $game."_".$count.".txt";
    $text = $username.",".$comment;
    file_put_contents($file, $text);
?>

<a href = "post.php?game=<?=$game?>">Back to post</a>