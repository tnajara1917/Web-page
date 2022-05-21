<?php
    error_reporting(E_ERROR | E_PARSE);

    include("top.php");
    $username = $_GET["username"];//username
    $pp = $_GET["profilepic"]; //profile picture file path
    $bio = $_GET["user_bio"]; //user bio
    $user_gender = $_GET["gender"];
    $user_console = $_GET["console"];
?>
<div class = "profile_body">
        <div class = "profile_pic_body">
            <div class = "profile_pic">
                <img src = "images/sal.jpg" alt = "Profile picture">
                <h1>Wario158</h1>
            </div>
        </div>
        <div id = "bio">
            <h2>Gender: male</h2>
            <h2>Favorite Game: Minecraft</h2>
            <h2>Favorite Console: Playstation</h2>   
        </div>
</div>

<?php
    include("bottom.html");
?>