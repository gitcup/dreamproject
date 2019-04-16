
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

include("../connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name= $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$message = $_POST['message'];


$sql = "INSERT INTO `contact`(`contact_id`, `name`, `email`, `phone`, `message`) VALUES (null,'$name','$email','$phone','$message')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () 
    { swal("Message Sending!","We will contact you back","success");}, 1000);</script>';
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<meta http-equiv="refresh" content="3;url=../index.php" />