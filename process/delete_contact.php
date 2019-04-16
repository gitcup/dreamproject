
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

include("../connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$contact_id= $_GET['contact_id'];



$sql = "DELETE FROM `contact` WHERE contact_id='$contact_id'";

if ($conn->query($sql) === TRUE) {

  
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () 
    { swal("Delete success!","Booking data has been deleted","success");}, 1000);</script>';
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<meta http-equiv="refresh" content="3;url=../admin_page.php" />