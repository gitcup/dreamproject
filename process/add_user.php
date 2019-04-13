
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

include("../connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username= $_POST['username'];
$password = $_POST['password'];
$name= $_POST['name'];
$lastname = $_POST['last_name'];
$company_name = $_POST['company_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];

$sql = "INSERT INTO `member`(`user_id`, `username`, `password`, `firstname`, `lastname`, `company_name`, `address`, `phone_number`)
 VALUES (null,'$username','$password','$name','$lastname','$company_name','$address','$phone_number')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () 
    { swal("ลงทะเบียนสำเร็จ!","ทำการเข้าสู่ระบบอีกรอบเพื่อเข้าใช้งาน","success");}, 1000);</script>';
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<meta http-equiv="refresh" content="3;url=../index.php" />