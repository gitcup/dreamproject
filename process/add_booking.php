
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

include("../connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username= $_POST['username'];//เก็บ username
$ship_name= $_POST['ship_name'];
$invoice_id= $_POST['invoice_id'];

$etd= $_POST['etd'];
$port_discharge =  $_POST['port_discharge'];
$eta =  $_POST['eta'];
$port_delivery =  $_POST['port_delivery'];
$eta_2 =  $_POST['eta_2'];

$feeder_vessel =  $_POST['feeder_vessel'];
$feeder_voyage =  $_POST['feeder_voyage'];

$mother_vessel =  $_POST['mother_vessel'];
$mother_voyage =  $_POST['mother_voyage'];

$weight = $_POST['weight'].' '.$_POST['weight_unit'];//น้ำหนัก
$quantity = $_POST['quantity'].' '.$_POST['quantity_unit'];//จำนวน

$quantity_volume = $_POST['quantity_volume'].' '.$_POST['unit_volume'];//จำนวน

$type = $_POST['type']; //=ชนิด

$loading_at = $_POST['loading_at'];
$transporter = $_POST['transporter'];


$loading_date = $_POST['loading_date'];
$transporter_tel = $_POST['transporter_tel'];


$contact = $_POST['contact'];
$shiping_contact = $_POST['shiping_contact'];

$contact_tel = $_POST['contact_tel'];
$shiping_tel = $_POST['shiping_tel'];

$time = $_POST['time'];
$closing_date = $_POST['closing_date'];

$no_of_containner =  $_POST['no_of_containner'];


$sql = "INSERT INTO `booking_detail` (`booking_detail_id`, `invoice_id`, `ship_name`, `post_of_load`, `etd`, `post_of_discharge`, `eta`, `post_deli`, `eta_2`, `feeder_vessel`, `feeder_voyage`, `mother_vessel`, `mother_voyage`, `quantity_volume`,`weight`,`quantity`,`load_at`, `transporter`, `load_date`, `transporter_tel`, `contact`, `shiping_contact`, `tel_contact`, `tel_shiping`, `closing_date`, `time`, `type`,`username`) 
VALUES ('','$invoice_id', '$ship_name', '$port_discharge', '$etd', '$port_discharge', '$eta', '$port_delivery', '$eta_2', '$feeder_vessel', '$feeder_voyage', '$mother_vessel', '$mother_voyage', '$quantity_volume','$weight','$quantity' , '$loading_at', '$transporter', '$loading_date', '$transporter_tel', '$contact', '$shiping_contact', '$contact_tel', '$shiping_tel', '$closing_date', '$time', '$type','$username')
";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () 
    { swal("ลงทะเบียนสำเร็จ!","ทำการเข้าสู่ระบบอีกรอบเพื่อเข้าใช้งาน","success");}, 1000);</script>';
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<meta http-equiv="refresh" content="3;url=../admin_page.php" />