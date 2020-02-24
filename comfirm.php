<?php
Session_Start();
if(isset($_SESSION['color'])){
	$array=array("Red"=>"#FF0000","Green"=>"#008000","Blue"=>"#0000FF");
	$selectColor=$_SESSION['color'];
	print "<h1>Session Lab Confirm</h1>";
	echo "Confirmed: You chose " . $selectColor ;
	echo " with a hex code of" . $array[$selectColor] ;
	$linkaddress1 = "index.php";
	echo " <br><a href=$linkaddress1>Click to start over</a> </br>";

};