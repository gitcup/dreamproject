
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

include("../connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$booking_id= $_GET['booking_id'];



$sql = "DELETE FROM `invoice_file` WHERE invoice_id='$booking_id'";

if ($conn->query($sql) === TRUE) {

    $sql2 = mysqli_query($conn,"DELETE FROM booking_detail WHERE booking_id='$booking_id'");
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () 
    { swal("Delete success!","Booking data has been deleted","success");}, 1000);</script>';
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<meta http-equiv="refresh" content="3;url=../admin_page.php" />