<?php
    $user = $_GET["user"];
    $pass = $_GET["pass"];

    $arr = file("users.txt");
            
    for($i = 0; $i < count($arr); $i++){
        $exp = explode(";",$arr[$i]);
        echo $exp[0];
        if($exp[0]== $user && $pass==$exp[2]){
            $myfile = fopen( "users/".$user.".txt", "w");
            fwrite($myfile, 1);    
            header("Location: home.php");   
        }
        else{
            header("login.php");
        }
    }
?>
