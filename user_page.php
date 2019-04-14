<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> JN SUCCESS.CO.,LTD </title>

    <!-- Bootstrap core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 

    <!-- Custom fonts for this template -->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Plugin CSS -->
    <link href="./vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/dis.css" rel="stylesheet">
   <link href="css/step-process.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
    //script typeofservice
    $(document).ready(function() {
        $('#SelectFrom1').hide();
        $('#SelectFrom2').hide();
        $('#SelectTo1').hide();
        $('#SelectTo2').hide();
        $("#TypeOfService").change(function() {
            var x = document.getElementById("TypeOfService").value;
            $('#SelectFrom1').hide();
            $('#SelectFrom2').hide();
            $('#SelectTo1').hide();
            $('#SelectTo2').hide();
            if (x != '0') {

                if (x == '1') {

                    $('#SelectFrom1').show();
                    $('#SelectTo2').show();
                } else if (x == '2') {

                    $('#SelectFrom2').show();
                    $('#SelectTo1').show();
                }
            }


        })

    });
    </script>
    <script>
    $(document).ready(function() {
        $('#ASR').change(function() {

            var y = document.getElementById("ASR").value;

            if (y == '3') {

                $('#SelectFrom1').hide();
                $('#SelectFrom2').hide();
                $('#SelectTo1').hide();
                $('#SelectTo2').hide();

                $('#from').hide();
                $('#SelectTo2').show();

            } else {

                $('#from').show();
                $('#SelectTo2').hide();


            }

        })
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#submit_cal').click(function() {
            var TypeOfService = document.getElementById('TypeOfService').value;
            var ASR = document.getElementById('ASR').value;
            var weight = document.getElementById('weight').value;
            var height = document.getElementById('height').value;
            var length = document.getElementById('length').value;
            var width = document.getElementById('width').value;
            var Quantity = document.getElementById('Quantity').value;
            var Quantity2 = document.getElementById('Quantity2').value;
            var Price = document.getElementById('Price').value;
            if (TypeOfService == 1) {
                var money = (weight * height * length) / 6000;
            }


        })
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#submit_cal').click(function() {
            var TypeOfService = document.getElementById('TypeOfService').value;
            var ASR = document.getElementById('ASR').value;
            var weight = document.getElementById('weight').value;
            var height = document.getElementById('height').value;
            var length = document.getElementById('length').value;
            var width = document.getElementById('width').value;
            var Quantity = document.getElementById('Quantity').value;
            var Quantity2 = document.getElementById('Quantity2').value;
            var Price = document.getElementById('Price').value;

            $.ajax({
                url: "insert_invoice.php? TypeOfService" + TypeOfService + "ASR" + ASR +
                    "&ASR" + "weight" + weight + "&weight" + "height" + height + "&height" +
                    "lengtht" + length + "&length" + "width" + width + "&width" + "Quantity" +
                    Quantity + "&Quantity" + "Quantity2" + Quantity2 + "&Quantity2" + "Price" +
                    Price + "&Price",
                success: function(response) {
                    if (response == '1') {
                        alert('บันทึกข้อมูล สำเร็จ');
                        windows.location = "insert_invoice.php? TypeOfService" +
                            TypeOfService + "ASR" + ASR + "&ASR" + "weight" + weight +
                            "&weight" + "height" + height + "&height" +
                            "lengtht" + length + "&length" + "width" + width + "&width" +
                            "Quantity" + Quantity + "&Quantity" + "Quantity2" + Quantity2 +
                            "&Quantity2" + "Price" + Price + "&Price";
                    }
                }
            });


        })
    });
    </script>


</head>

<style>
.padding {
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}
</style>

<body id="page-top">

    <?php include('navbar.php'); ?>

    <!-- Header
    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <img class="img-fluid mb-5 d-block mx-auto" src="img/oper.png" alt="">
            <h1 class="text-uppercase mb-0"> Freight Forwarder Management System.</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0"> The excellent way to prefer to transport your products.</h2>
        </div>
    </header> -->


    <?php include('connect.php');
$username =$_SESSION["username"]; 
$sql="SELECT *  FROM member WHERE username='$username' ";
$result=mysqli_query($conn,$sql);

// Associative array
$row=mysqli_fetch_assoc($result);

?>


    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="mainmenu">
        <div class="container">
            <div class="form-row">
                <div class="jumbotron col-md-3" style="background-color : white;">



                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Menu
                        </div>
                        <ul class="list-group list-group-flush">
                            <a class="list-group-item" href="#" id="profile">Profile</a>
                            <a class="list-group-item" href="#" id="booking">Booking</a>
                            <a class="list-group-item" href="#" id="status">Status</a>
                            <a class="list-group-item" href="#" id="bill">Bill</a>
                        </ul>
                    </div>
                </div>


                <div class="jumbotron col-md-9" style="background-color : white;">

                    <div class="card" style="width: 50rem;">
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                <li class="breadcrumb-item"><a href="#">Booking</a></li>
                                <li class="breadcrumb-item"><a href="#">Status</a></li>
                                <li class="breadcrumb-item"><a href="#" id="bill">Bill</a></li>

                            </ol>
                        </div>
                        <!-- 
                        ข้อมูลส่วนตัว -->
                        <div id="profile_form" class="padding">
                            <ul class="list-group list-group-flush">
                                <br>
                                <div class="form-inline">
                                    <label><strong>ชื่อ-นามสกุล : </strong>
                                        <?php echo $row['firstname'].'   '.$row['lastname'] ?>
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label><strong>ชื่อบริษัท : </strong>
                                        <?php echo $row['company_name']?> </label>
                                </div>
                                <div class="form-inline">
                                    <label><strong>ที่อยู่ : </strong> <?php echo $row['address']?>
                                    </label>
                                </div>
                                <div class="form-inline">
                                    <label><strong>เบอร์โทรศัพท์ : </strong>
                                        <?php echo $row['phone_number']?> </label>
                                </div>
                                <br>
                            </ul>
                        </div>

                        <!-- สถานะ -->
                        <!-- <div id="status" class="padding">
                            <form>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">จัดเตรียสมเอกสาร</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">แจก D/O</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Custom Famality</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">สินค้าถึงท่าเรือ</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label"
                                        for="exampleCheck1">รถบรรทุกนำาินค้าเข้าโรงงาน</label>
                                </div>

                            </form>
                        </div> -->



                        <!-- ส่งไฟล์ให้ admin -->
                        <div id="bill_form" class="padding">
                            <form>
                                <label for="exampleFormControlFile1">ส่งใบข้อมูลให้ Admin</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        </form>

                        
                        <!-- ส่งไฟล์ให้ admin -->
                        <div id="booking_form" class="padding">
                            <form action="send_booking.php?username=<?php echo $username?>" method="POST" enctype="multipart/form-data" >
                                <label >ส่งใบ Booking ให้ Admin</label>
                                <input type="file" class="form-control-file" name="booking" >
                                <br>
                                <button type="submit" class="btn btn-primary" >ส่งไฟล์</button>
                        </div>
                        </form>

                        <!-- แสดงสถานะ -->
                        <div id="status_form" class="padding">

                            <label for="exampleFormControlFile1">สถานะ</label>
                            <div class="container1">
                                <ul class="progressbar1">
                                    <li class="active">จัดเตรียสมเอกสาร</li>
                                    <li>แจก D/O</li>
                                    <li>Custom Famality</li>
                                    <li>สินค้าถึงท่าเรือ</li>
                                    <li>รถบรรทุกนำาินค้าเข้าโรงงาน</li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>




                <script>
                $(document).ready(function() {
                    // $("#profile").hide();
                    $("#booking_form").hide();
                    $("#status_form").hide();
                    $("#bill_form").hide();
                    $("#bill").click(function() {
                        $("#profile_form").hide();
                        $("#status_form").hide();
                        $("#bill_form").fadeIn();
                    });
                    $("#profile").click(function() {
                        $("#bill_form").hide();
                        $("#status_form").hide();
                        $("#profile_form").fadeIn();
                    });
                    $("#status").click(function() {
                        $("#profile_form").hide();
                        $("#bill_form").hide();
                        $("#status_form").fadeIn();
                    });

                    $("#booking").click(function() {
                        $("#profile_form").hide();
                        $("#bill_form").hide();
                        $("#status_form").hide();
                        $("#booking_form").fadeIn();
                    });


                });
                </script>



            </div>
        </div>
        </div>
        </div>





        <!-- <header class="masthead bg-primary text-white text-center">
            <div class="container">
                <h2 class="text-center text-uppercase text-secondary mb-0">Member</h1>
                    <hr class="star-light">
                    <p align="center"><img class="img-fluid mb-5 d-block mx-auto" src="./img/pij.png" width="700"
                            height="900" alt="">
                    </p>

            </div>
        </header> -->





        <!-- Contact Section -->
        <!-- <section id="contact">
            <div class="container">
                <h2 class="text-center text-uppercase text-secondary mb-0">Contact </h2>
                <hr class="star-dark mb-5">
                <div class="row">
                    <div class="col-lg-8 mx-auto"> -->
        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
        <!-- <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name"
                                        required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address"
                                        required="required"
                                        data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number"
                                        required="required"
                                        data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">S<span
                                        class="form-group floating-label-form-group controls mb-0 pb-2"></span>end</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">58/12 Moo.5,Tumbon BangMeaNang,
                            <br>Aumphoe BangYai ,Nonthaburi 11140</p>
                    </div>
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fab fa-fw fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fab fa-fw fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fab fa-fw fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fab fa-fw fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fab fa-fw fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-uppercase mb-3">About Freight Forwarder</h4>
                        <p class="lead mb-0">Freight Forwarder is a company that organizes shipments for individuals to
                            get goods from the manufacturer.
                            <a href="https://cargofromchina.com/freight-forwarder/">Read Here</a>.</p>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>JNS &copy; Your Website 2019</small>
            </div>
        </div>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-to-top d-lg-none position-fixed ">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>











        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/freelancer.min.js"></script>

        <script src="js/fr.js"></script>

</body>

</html>