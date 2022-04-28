<?php include("top.html"); ?>

<?php
	//This php part is for the user to get their matches accessed.
	$returning_user_name = $_GET["returning_user_name"];   
	$user_info;
	$singles = file("singles.txt");
	for($i = 0; $i < count($singles); $i++){
		$user = explode(",", $singles[$i]);
		if($user[0] == $returning_user_name){
			$user_info = $user;
		}
	}
?>

<strong>Matches for <?php print $user_info[0]; ?></strong>
<br>

<?php
	//this for loop will allow the user to see if their information might match with someone. (Details below!)
	for($i = 0; $i < count($singles); $i++){
		$compare_user = explode(",", $singles[$i]);
		
		//comparison of gender, if same, go to next
		if($user_info[1] == $compare_user[1]){   
			continue;
		}
		
		 //If user age is greater than max age and less than min, go to next
		if($user_info[5] > $compare_user[2] or $user_info[6] < $compare_user[2]){ 
			continue;             
		}
		
		if($compare_user[5] > $user_info[2] or $compare_user[6] < $user_info[2]){ 
			continue;             
		}
		
		//Operating systems don't match, no match
		if($user_info[4] != $compare_user[4]){
			continue;
		}
		
		//personality comparison
		$user_personality = $user_info[3];
		$compare_personality = $compare_user[3];
		$counter = 0;
		for($j=0; $j < strlen($user_personality); $j++){
			if($user_personality[$j] == $compare_personality[$j]){
				$counter++;
			}
		}
		
		if($counter < 1){
			continue;
		}
		
		?>

		<!--matches being added-->
		<div class="match">
		<p>
			<img src = "user.jpg" alt="<?php print($compare_user[0]); ?>">
			<?php print($compare_user[0]); ?>
		</p>
		
		<ul>
			<li><strong>Gender:</strong><?php print($compare_user[1]);?></li>
			<li><strong>Age:</strong><?php print($compare_user[2]);?></li>
			<li><strong>Type:</strong><?php print($compare_user[3]);?></li>
			<li><strong>Favorite OS:</strong><?php print($compare_user[4]);?></li>
		</ul>
		</div>
		
		<?php 
	}
?>

<?php include("bottom.html"); ?>