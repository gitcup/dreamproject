
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

include("../connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$status_update= $_POST['status_update'];
$username = $_POST['username'];

$sql = "UPDATE `booking_file` SET `status`='$status_update' WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () 
    { swal("UPDATE SUCCESS!","STATUS HAS BEEN CHANGE","success");}, 1000);</script>';
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<meta http-equiv="refresh" content="3;url=../admin_page.php" />