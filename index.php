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

<body id="page-top">

    <?php include('navbar.php'); ?>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <img class="img-fluid mb-5 d-block mx-auto" src="img/oper.png" alt="">
            <h1 class="text-uppercase mb-0"> Freight Forwarder Management System.</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0"> The excellent way to prefer to transport your products.</h2>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="jumbotron">


                <?php  include('select.php');?>



                <!-- Example split button -->
                <p />
                <form method="post">
                    Quantity: <input class="form-control" type="text" name="Quantity" value="" id="Quantity"><br>

                    <br>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect02">Type</label>
                        <select class="custom-select" id="inputGroupSelect03">
                            <option selected>Choose...</option>
                            <option value="1">carton</option>
                            <option value="2">pallet</option>
                            <option value="3">wooden case</option>
                        </select>
                    </div>
                </form>
                <form class="form-inline">

                    <div class="form-group mb-2">
                        weight: <input type="text" class="form-control" name="weight" value="" id="weight"></from>

                        height: <input type="text" class="form-control" name="height" value="" id="height"></from>

                        length: <input type="text" class="form-control" name="length" value="" id="length"></from>

                        width: <input type="text" class="form-control" name="width" value="" id="width"></from>
                    </div>

                    <p><input id="submit_cal" type="submit" value="คำนวณ" name="submit"></p>
            </div>
            </form>
        </div>
        </div>

        </div>
        <div class="control-group" align="center">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <!-- Quantity: <input type="text" name="Quantity" value="" id="Quantity2"> -->
                Price: <input type="text" name="Price" value="" id="Price">
                <p class="help-block text-danger"></p>
            </div>
            <!-- กดแล้วเด้งข้อความ ให้ติดต่อมา -->
            <a href="#contact" class="js-scroll-trigger btn btn-primary" id="submit_message">Submit</a>

        </div>



        <script>
        $(document).ready(function() {

            $("#message").hide();
            $("#submit_message").click(function() {
                //   console.log('test');
                $("#message").fadeIn( "slow" );
                $("#message").fadeOut( 4000 );
                // $("#booking_form").fadeOut();
            });

        });
        </script>
        <div cbotron">


            <section id="member">
        </div>
        <header class="masthead bg-primary text-white text-center">
            <div class="container">
                <h2 class="text-center text-uppercase text-secondary mb-0">Member</h1>
                    <hr class="star-light">
                    <p align="center"><img class="img-fluid mb-5 d-block mx-auto" src="./img/pij.png" width="700"
                            height="900" alt="">
                    </p>

            </div>
        </header>





        <!-- Contact Section -->
        <section id="contact">

            <div class="container">

                <h2 class="text-center text-uppercase text-secondary mb-0">Contact </h2>
                <hr class="star-dark mb-5">

                <div class="alert alert-primary" role="alert" id="message">
                    If you are interested, please contact us.

                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="process/add_contact.php" method="POST" >
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="Name"
                                        required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" name="email" type="email" placeholder="Email Address"
                                        required="required"
                                        data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" name="phone" type="tel" placeholder="Phone Number"
                                        required="required"
                                        data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <input class="form-control" name="message" type="text" placeholder="message"
                                        required="required"
                                        data-validation-required-message="Please enter your phone number.">
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
        </section>

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



        <!-- Modal สมัครสมาชิก -->
        <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="process\add_user.php" method="POST">
                            <div class="form-inline">

                                <label>username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="username">
                                </div>

                            </div>
                            <br>
                            <div class="form-inline">

                                <label>password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password">
                                </div>

                            </div>
                            <br>
                            <div class="form-inline">

                                <label>ชื่อบริษัท</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="company_name">
                                </div>

                            </div>
                            <br>
                            <div class="form-inline">

                                <label>ชื่อ-นามสกุล</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="ชื่อ" name="name">
                                    <input class="form-control" type="text" placeholder="นามสกุล" name="last_name">
                                </div>

                            </div>
                            <br>
                            <div class="form-inline">

                                <label>ที่อยู่</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="ที่อยู่ของบริษัท"
                                        name="address">
                                </div>

                            </div>
                            <br>
                            <div class="form-inline">

                                <label>เบอร์โทร</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="phone_number">
                                </div>

                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button class="btn btn-primary" type="submit">ลงทะเบียน</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>




        <!-- Modal เข้าสู่ระบบ -->
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="process/login.php" method="POST">
                        <div class="modal-body" style="text-align : center;">

                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <label for="exampleInputEmail1">Username</label>

                                    <input type="text" class="form-control" name="username">
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
else.</small> -->


                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="col-sm">

                                </div>

                            </div>
                            <br>
                            <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                    </form>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <!-- <button type="button" class="btn btn-primary">ลงทะเบียน</button> -->
                    </div>
                </div>
            </div>
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