<?php
Session_Start();
if(isset($_POST['color'])){
	$array=array("Red"=>"#FF0000","Green"=>"#008000","Blue"=>"#0000FF");
	$selectColor=$_POST['color'];
	print "<h1>Session Lab Confirm</h1>";
	echo "You chose " . $selectColor ;
	echo " which is" . $array[$selectColor] ;
	$linkaddress1 = "continue.php";
	$linkaddress2 ="index.php";
	echo " <br><a href=$linkaddress1>Click to continue</a> </br>";
	echo " <br><a href=$linkaddress2>Click to start over</a> </br>";
	
	$_SESSION['color'] = $selectColor;

};