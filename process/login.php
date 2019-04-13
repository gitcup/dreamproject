<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include("../connect.php");
session_start();


$username = $_POST['username'];
$password = $_POST['password'];
	$sql = "SELECT * FROM   member WHERE username = '".mysqli_real_escape_string($conn,$username)."' 
	and password = '".mysqli_real_escape_string($conn,$password)."'";
	$objQuery = mysqli_query($conn,$sql);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
		echo 'ไม่มีข้อมูล';
	}
	else
	{
			$_SESSION["username"] = $objResult["username"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "admin")
			{
				header("location:../admin_page.php");
			}
			else
			{
				header("location:../user_page.php");
			}
	}
	mysqli_close($conn);
?>