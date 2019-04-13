<?php
	$TypeOfService = $_REQUEST['TypeOfService'];
	echo $TypeOfService;
	$ASR = $_REQUEST['ASR'];
	echo $ASR;
	$weight = $_REQUEST['weight'];
	echo $weight;
	$height = $_REQUEST['height'];
	echo $height;
	$length = $_REQUEST['length'];
	echo $length;
	$width = $_REQUEST['width'];
	echo $width;
	$Quantity = $_REQUEST['Quantity'];
	echo $Quantity;
	$Quantity2 = $_REQUEST['Quantity2'];
	echo $Quantity2;
	$Price = $_REQUEST['Price'];
	echo $Price;
	$sql="INSERT INTO download( TypeOfService, ASR , weight, height, length, width, Quantity, Quantity2, Price)
	VALUES ($'TypeOfService',$'ASR',$'weight',$'height',$'length',$'width',$'Quantity',$'Quantity2',$'Price')";
	


?>