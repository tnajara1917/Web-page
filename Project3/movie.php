<!DOCTYPE html>
<head>
	
 <title>Rancid Tomato</title>

 <!-- CSS file call -->
 <link rel="stylesheet" href="movie.css">

 <!-- favorite icon -->
 <link rel="icon" type="image/jpg" href="images/rotten.gif">
</head>
<body>
 <?php 
	//Defining Variables
	$movie = $_GET["film"]; 
	$info = file("$movie/info.txt"); 
	$overview = file("$movie/overview.txt"); 
	$overview_image_source = "$movie/overview.png";
	$overview_content = file("$movie/overview.txt");
 ?>

 <!-- Banner -->
 <div class="banner-image">
	<img src="images/banner.png" alt="Rancid Tomatos" />
 </div>

 <!-- Title Area -->
 <h1>
	<?=$info[0] ?>
	(<?=trim($info[1])?>)
 </h1>

 <!-- Content -->
 <div id="content">
 
 <!-- Overview Image -->
 <div id="general-overview">
	<img src= "<?=$overview_image_source?>" 
 alt="general-overview">
 
 <!-- Overview Content -->
 <div class="overview-content">
 <?php

 #For each line, seperate by delimiter ":", then print
	foreach($overview_content as $line){
	$line = explode(":", $line);
 ?>
	<dt><?=$line[0];?></dt>
	<dd><?=$line[1];?></dd>
 <?php
 } 
 ?>

 </div>
 </div>

 <!-- Critics Review -->
 <div id="critic">
 <div class="top">
 <!-- 60% above for freshbig.png -->
 <?php 
	if($info[2] >= 60){
 ?>
	<img src="images/freshbig.png" alt="fresh">
 <?php
 }else{
 ?>
	<img src="images/rottenbig.png" alt="rotten">
 <?php
 }
 ?>
	<?=$info[2]?>%
 </div>
 </div>

 <div class="col">
 <?php 
	#all reviews
	$reviews = glob("$movie/review*.txt");
	$num_reviews = count($reviews);
	$half_reviews = (int)($num_reviews/2) + ($num_reviews % 2); 
	for($count = 0; $count < $num_reviews; $count++){
	
		if($count == 0 || $count == $half_reviews){
 ?>
<div class="review-col">
 <?php 
 }
 #Get contents from $count review
	$review = file($reviews[$count]);
 ?>
 <div class="review">
 <?php

	if(trim($review[1]) == "FRESH"){
 ?>
	<img src="images/fresh.gif" alt="fresh"> 
 <?php
 }else{ 
 ?>
	<img src="images/rotten.gif" alt="rotten">
 <?php
 }
 ?>
 
 <q><?=trim($review[0]); #Review itself?></q>
 </div> 
 <br>
 <div class="reviewer">
	<img src="images/critic.gif" alt="critic">
	<?=trim($review[2]); ?>
 <br />
	<?=trim($review[3]); ?>
 </div>

 
 
 <?php
 if($count == $half_reviews-1 || $count == $num_reviews-1){
 ?>
 </div>
 <?php
 }
 }
 ?>
 
 </div>

 <p id = "bot">(1-<?=trim($num_reviews)?>) of <?=trim($num_reviews)?></p>
 </div>


</body>
</html>