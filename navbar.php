 <!-- Navigation -->
 <?php
 session_start();
 error_reporting(~E_NOTICE);
 if ( $_SESSION["status"] == "user" ) { ?>
 <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
     <div class="container">
         <a class="navbar-brand js-scroll-trigger" href="#page-top">
             <img src="./img/JNS.png" width="50" height="50" alt=""> JN SUCCESS.CO.,LTD</a>
         <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button"
             data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
             aria-expanded="false" aria-label="Toggle navigation">
             Menu
             <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home page</a>
                 </li>



                 <li class="nav-item dropdown mx-0 mx-lg-1">
                     <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#"
                         id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false" href="#contact">Service </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="#">Air</a>
                         <a class="dropdown-item" href="#">Ocean</a>
                         <a class="dropdown-item" href="#">Trunk</a>
                     </div>
                 </li>



                 <!-- <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal"
                            data-target="#RegisterModal" href="#">Member</a>
                    </li> -->



                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact Us</a>

                 </li>

                 <li class="nav-item mx-0 mx-lg-1">
                     <div class="dropdown">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                             ยินดีต้อนรับ <?php echo $_SESSION["username"];  ?>
                         </button>
                         <div class="dropdown-menu">
                             <!-- <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a> -->
                             <a class="dropdown-item" href="process/logout.php">ออกจากระบบ</a>
                             <!-- <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Another link</a>
    </div> -->
                         </div>
                 </li>
             </ul>
         </div>
     </div>
 </nav>

 <?php } else if ($_SESSION["status"] == "admin" )  { ?>
 <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
     <div class="container">
         <a class="navbar-brand js-scroll-trigger" href="#page-top">
             <img src="./img/JNS.png" width="50" height="50" alt=""> JN SUCCESS.CO.,LTD</a>
         <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button"
             data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
             aria-expanded="false" aria-label="Toggle navigation">
             Menu
             <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Home page</a>
                 </li>



                 <li class="nav-item dropdown mx-0 mx-lg-1">
                     <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#"
                         id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false" href="#contact">Service </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="#">Air</a>
                         <a class="dropdown-item" href="#">Ocean</a>
                         <a class="dropdown-item" href="#">Trunk</a>
                     </div>
                 </li>


<!-- 
                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal"
                         data-target="#RegisterModal" href="#">Member</a>
                 </li> -->



                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact Us</a>

                 </li>

                 <li class="nav-item mx-0 mx-lg-1">
                     <div class="dropdown">
                         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                             ยินดีต้อนรับ <?php echo $_SESSION["username"];  ?>
                         </button>
                         <div class="dropdown-menu">
                             <!-- <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a> -->
                             <a class="dropdown-item" href="process/logout.php">ออกจากระบบ</a>
                             <!-- <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Another link</a>
    </div> -->
                         </div>
                 </li>
             </ul>
         </div>
     </div>
 </nav>

 <?php }else { ?>

 <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
     <div class="container">
         <a class="navbar-brand js-scroll-trigger" href="#page-top">
             <img src="./img/JNS.png" width="50" height="50" alt=""> JN SUCCESS.CO.,LTD</a>
         <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button"
             data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
             aria-expanded="false" aria-label="Toggle navigation">
             Menu
             <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Home page</a>
                 </li>



                 <li class="nav-item dropdown mx-0 mx-lg-1">
                     <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#"
                         id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false" href="#contact">Service </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="#">Air</a>
                         <a class="dropdown-item" href="#">Ocean</a>
                         <a class="dropdown-item" href="#">Trunk</a>
                     </div>
                 </li>



                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal"
                         data-target="#RegisterModal" href="#">Register</a>
                 </li>



                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact Us</a>

                 </li>

                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal"
                         data-target="#LoginModal" href="#">Login</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>

 <?php } ?>




 ?>