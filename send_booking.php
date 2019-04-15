<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
$username= $_GET['username'];

$currentDir = getcwd();

mkdir("booking/$username/");
$uploadDirectory = "/booking/$username/";



$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ["pdf", "doc", "docx"]; // Get all the file extensions

$fileName = $_FILES['booking']['name'];
$fileSize = $_FILES['booking']['size'];
$fileTmpName  = $_FILES['booking']['tmp_name'];
$fileType = $_FILES['booking']['type'];


$tmp = explode('.', $fileName);
$fileExtension = end($tmp);


// $fileExtension = strtolower(end(explode('.',$fileName)));

$uploadPath = $currentDir . $uploadDirectory . basename($fileName); 



    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }


// เพิ่มลงฐานข้อมูล
include('connect.php');
$path_sql = "$fileName";

    $sql = "INSERT INTO `booking_file`(`booking_id`, `path_file`, `username`,`status`) VALUES ('null','$path_sql','$username','Receive form shipper')";
   
   if ($conn->query($sql) === TRUE) {
       echo '<script type="text/javascript">';
       echo 'setTimeout(function () 
       { swal("Sending Booking Complete !","wait for admin ","success");}, 1000);</script>';
      
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }


?>

<meta http-equiv="refresh" content="3;url=user_page.php" />