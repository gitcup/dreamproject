<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JN SUCCESS.CO.,LTD - Admin </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/step-process.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.html">Admin Panel</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="admin_page.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin page</span>
                </a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>สมาชิก</span>
                </a> -->
            <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div> -->
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link"  href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Booking Form</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="admin_contact_page.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contact Message</span></a>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>


                <div class="card mb-3" id="member_form">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        สมาชิก</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ชื่อผู้ใช้</th>
                                        <th>ชื่อจริง</th>
                                        <th>นามสกุล</th>
                                        <th>ชื่อบริษัท</th>
                                        <th>ที่อยู่</th>
                                        <th>เบอร์โทร</th>
                                        <th>สถานะ</th>
                                        <th>Invoice</th>
                                        <th>Booking</th>
                                        <th>B/l</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ชื่อผู้ใช้</th>
                                        <th>ชื่อจริง</th>
                                        <th>นามสกุล</th>
                                        <th>ชื่อบริษัท</th>
                                        <th>ที่อยู่</th>
                                        <th>เบอร์โทร</th>
                                        <th>สถานะ</th>
                                        <th>Invoice</th>
                                        <th>Booking</th>
                                        <th>B/l</th>
                                        <th>action</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php
                                    include('connect.php');
                  $query = "SELECT * FROM member 
                  INNER JOIN invoice_file ON member.username=invoice_file.username
                 
                   ";

                  
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result))
{

      
   

    echo '<tr>
    <td>'.$row['username'].'</td>
    <td>'.$row['firstname'].'</td>
    <td>'.$row['lastname'].'</td>
    <td>'.$row['company_name'].'</td>
    <td>'.$row['address'].'</td>
    <td>'.$row['phone_number'].'</td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg'.$row['username'].'">สถานะ</button></td>
    <td><a href="invoice/'.$row['username'].'/'.$row['path_file'].'" class="btn btn-success">Invoice file</a>
   </td>
<td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookingModal'.$row['username'].'" >+ Add Booking</button></td>
<td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#billModal">
+ Add Bill
</button></td>
<td><a href="process/delete_booking.php?booking_id='.$row['invoice_id'].'" class="btn btn-danger"  >Delete</a></td>
</tr>';


echo'<!-- Modal Bill -->
<div class="modal fade bd-example-modal-lg" id="bookingModal'.$row['username'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_2" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel_2">Attach Files Bill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     

      <form action="process/add_booking.php" method="POST" class="form-horizontal" style=" font-size: 14px;">
      <fieldset>
  
          <!-- Form Name -->
          <legend>Booking form</legend>
  
  
          <!-- Text input-->
          <div class="form-row">
  
              <input id="username_get" name="username" type="text" value="" class="form-control input-md" hidden>
              <!-- <input  name="booking_id" type="text" value="" class="form-control input-md" hidden> -->
  
              <div class="col-md-4">
                  <label class="col-md-9 control-label" for="ship_name">SHIPPING NAME</label>
                  <input name="ship_name" type="text" placeholder="" class="form-control input-md">
  
              </div>
              <div class="col-md-4">
                  <label class="col-md-6 control-label" for="ship_name">Booking NO.</label>
                  <input name="invoice_id" type="text" placeholder=""  class="form-control input-md"
                      value="'.$row['invoice_id'].'" readonly>
  
              </div>
  
          ';
      
      include('form_booking2.php'); 





      echo'</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>';

echo'<!-- Modal Bill -->
<div class="modal fade" id="billModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel_2">Attach Files Bill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="send_bill.php?username='.$row['username'].'" method="POST"
      enctype="multipart/form-data">
      <label>Send Bill of land/Bill of Air</label>
      <input type="file" class="form-control-file" name="bill">
      <br>
      <button type="submit" class="btn btn-primary">upload</button>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>';



echo '<div class="modal fade bd-example-modal-lg'.$row['username'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
  <div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Status</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
<label>สถานะปัจจุบัน</label>
<div calss="form-row">

<div class="container1">
<ul class="progressbar1">';


if ($row['status']=="Receive form shipper") {
echo'  <li  class="active"  >Receive form '.$row['receive_from'].' shipper</li>';
echo'  <li>Booking Confirm</li>';
echo'  <li >Departure</li>';
echo'  <li >Arrival</li>';
echo'  <li >Payment</li>';
} 
if ($row['status']=="Booking Confirm") {
echo'  <li  class="active"  >Receive form '.$row['receive_from'].' shipper</li>';
echo'  <li class="active" >Booking Confirm</li>';
echo'  <li >Departure</li>';
echo'  <li >Arrival</li>';
echo'  <li >Payment</li>';
} 
if ($row['status']=="Departure") {
echo'  <li  class="active"  >Receive form '.$row['receive_from'].' shipper</li>';
echo'  <li class="active" >Booking Confirm</li>';
echo'  <li class="active">Departure</li>';
echo'  <li  >Arrival</li>';
echo'  <li >Payment</li>';

} 

if ($row['status']=="Arrival") {
echo'  <li  class="active"  >Receive form '.$row['receive_from'].' shipper</li>';
echo'  <li class="active" >Booking Confirm</li>';
echo'  <li class="active">Departure</li>';
echo'  <li class="active" >Arrival</li>';
echo'  <li >Payment</li>';

} 
if ($row['status']=="Payment") {
    echo'  <li  class="active"  >Receive form '.$row['receive_from'].' shipper</li>';
    echo'  <li class="active" >Booking Confirm</li>';
    echo'  <li class="active">Departure</li>';
    echo'  <li class="active" >Arrival</li>';
    echo'  <li class="active" >Payment</li>';
    } 
echo'    </ul>
</div>


</div>
<br>
<br>';

if ($row['status']=="Receive form shipper") {
    echo'
    <form action="process/update_status.php" method="POST">
    <input name="username" value="'.$row['username'].'" hidden>
    <select name="status_update" class="form-control">
    <option value="'.$row['status'].'">'.$row['status'].'</option>
    <option value="Receive form shipper" >Receive form shipper</option>
    <option value="Booking Confirm">Booking Confirm</option>
    <option value="Departure">Departure</option>
    <option value="Arrival">Arrival</option>
    <option value="Payment">Payment</option>
    </select>
    
    <select name="receive_from" class="form-control">
  

   
    ';
   
    $query_country = "SELECT * FROM country_truck";

    
$result_country = mysqli_query($conn, $query_country);
while($row_country = mysqli_fetch_assoc($result_country))
{
 echo'  <option value="'.$row_country['Destination'].'">'.$row_country['Destination'].'</option>';
}

    // <select>
    // <option></option>
    // </select>

echo ' </select><button class="btn btn-primary" type="submit">UPDATE</button>
</form>
</div>';

   
    }else{

        echo'
        <form action="process/update_status.php" method="POST">
        <input name="username" value="'.$row['username'].'" hidden>
        <select name="status_update" class="form-control">
        <option value="'.$row['status'].'">'.$row['status'].'</option>
        <option value="Receive form shipper" >Receive form shipper</option>
        <option value="Booking Confirm">Booking Confirm</option>
        <option value="Departure">Departure</option>
        <option value="Arrival">Arrival</option>
        <option value="Payment">Payment</option>
        </select><button class="btn btn-primary" type="submit">UPDATE</button>
        </form>
        </div>';

    }





echo'<br>


<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

  </div>
</div>
</div>';




} 
                  ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>





                <!-- <div class="card mb-3"  id="booking_form">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Add Booking</div>
                    <div class="card-body">
                        <form action="process/add_booking.php" method="POST" class="form-horizontal"
                            style=" font-size: 14px;">


                           include('form_booking.php'); 
                        </form>
                    </div>
                </div>

            </div> -->













            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>


        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="process/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>





    <script>
    $(document).ready(function() {
        // $("#profile").hide();

        // $("#booking_form").hide();
        // $("#booking").click(function() {
        //     // $("#profile_form").hide();
        //     // $("#status_form").hide();
        //     var username = $("#booking").attr("value");
        //     var booking_id = $("#booking").attr("value2");
        //     console.log('test');
        //     $("#username_get").val(username);
        //     $("#booking_id_get").val(booking_id);
        //     $("#booking_form").fadeIn();
        //     $("#member_form").fadeOut();
        // });

        $("#booking_menu").click(function() {
            $("#member_form").fadeIn();
            $("#booking_form").fadeOut();
        });


        $("#list_country_truck").hide();
        $("#show_country").click(function() {
            $("#list_country_truck").fadeIn();

        });


    });
    </script>

    <!-- <script>
function myFunction() {
  confirm("Are you sure you want to delete this?");
  if(confirm('Do you want to visit : https://www.thaicreate.com')==true)
		{
			alert('Going to https://www.thaicreate.com');
			window.location = 'https://www.thaicreate.com';
		}
		else
		{
			alert('You selected to cancel.');
		}
}
</script> -->




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Page level plugin JavaScript-->

    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages
    <script src="js/sb-admin.min.js"></script> -->

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>