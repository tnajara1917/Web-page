<?php include("top.php"); ?>

<!--creation of the array with the information submitted -->
<!--This information will be sent to our database -->
<?php
	$arr = file("users.txt");
	$us = $_POST["name"];
	$em = $POST["email"];
	for($i = 0; $i < count($arr); $i++){
        $exp = explode(";",$arr[$i]);
        if($exp[0]== $us || $exp[1] == $em){
            header("Location: signup.php");
			echo "<script>alert('this username or email is already in use');</script>";
        }
    }

?>
	
	<strong>Thank You!</strong>
	<br>
	<br>
	Welcome to The Arcade, <?php print($_POST["name"])?>!
	<br>
	<br>
<?php
	$myfile = fopen( "users/".$_POST["name"].".txt", "w");
    fwrite($myfile, 1);
	fclose($myfile);
	$fp = fopen('users.txt', 'a');
	fwrite($fp, "\n".$_POST["name"].";".$_POST["email"].";".$_POST["password"].";".$_POST["gender"].";".$_POST["favorite-console"].";");
	fclose($fp);

?>	
	<?php include("bottom.html"); ?>
