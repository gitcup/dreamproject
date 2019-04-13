
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
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Plugin CSS -->
	<link href="./vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="css/freelancer.min.css" rel="stylesheet">
	<link href="css/dis.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	   
	<script>
	//script typeofservice
	$(document).ready(function(){	
		$('#SelectFrom1').hide();	
		$('#SelectFrom2').hide();	
		$('#SelectTo1').hide();
		$('#SelectTo2').hide();				
		$("#TypeOfService").change(function () {
			var x= document.getElementById("TypeOfService").value;
			$('#SelectFrom1').hide();	
			$('#SelectFrom2').hide();	
			$('#SelectTo1').hide();
			$('#SelectTo2').hide();	
			if(x!='0'){
				
				if(x=='1'){
					alert("Import");
					$('#SelectFrom1').show();
					$('#SelectTo2').show();	
				}else if(x=='2'){
					alert("Export");
					$('#SelectFrom2').show();
					$('#SelectTo1').show();	
				}
			}	

						
		})
				
	});
	</script>
	<script>
	$(document).ready(function(){
		$('#ASR').change(function () {
			
			var y = document.getElementById("ASR").value;
			alert(y);
			if(y=='3'){
				
				$('#SelectFrom1').hide();	
				$('#SelectFrom2').hide();	
				$('#SelectTo1').hide();
				$('#SelectTo2').hide();	
				
				$('#from').hide();
				$('#SelectTo2').show();
				
			}else {
	
                  $('#from').show();
                  $('#SelectTo2').hide(); 
				
			
			}
						
		})
	});
	</script>
	


</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img src="./img/JNS.png" width="50" height="50" alt=""> JN SUCCESS.CO.,LTD</a>
			<button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Home page</a>
					</li>
				

					
					<li class="nav-item dropdown mx-0 mx-lg-1">
						<a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#contact">Service </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="#">Air</a>
											<a class="dropdown-item" href="#">Ocean</a>
											<a class="dropdown-item" href="#">Trunk</a>
						</div>
					</li>					
					
					
					
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Member">Member</a>
					</li>
					
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact Us</a>
						
					</li>
				</ul>
			</div>
		</div>
	</nav>

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
		
			<h1 class="display-4">Hello! You can try calculating it.</h1>
			<p class="lead">This is a sample estimated calculation of the price..</p>
			 <div class="input-group mb-3">
				<div class="input-group-prepend" id="button-addon3">
				<label class="input-group-text" for="inputGroupSelect01">Type of service</label>
   
 <section id="member">
   </div>
<header class="masthead bg-primary text-white text-center">
		<div class="container">
		<h1 class="text-uppercase mb-0"><a href="../../member.php">Member</a></h1>
		<hr class="star-light">
		<p align = "center">
  		<img class="img-fluid mb-5 d-block mx-auto" src="./img/pij.png"  width="700" height="900"alt="">
		</p>
			
		</div>
	</header>



  

		<!-- Contact Section -->
	<section id="contact">
		<div class="container">
			<h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
			<hr class="star-dark mb-5">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
					<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form name="sentMessage" id="contactForm" novalidate="novalidate">
						<div class="control-group">
							<div class="form-group floating-label-form-group controls mb-0 pb-2">
								<label>Name</label>
								<input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="control-group">
							<div class="form-group floating-label-form-group controls mb-0 pb-2">
								<label>Email Address</label>
								<input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="control-group">
							<div class="form-group floating-label-form-group controls mb-0 pb-2">
								<label>Phone Number</label>
								<input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="control-group">
							<div class="form-group floating-label-form-group controls mb-0 pb-2">
								<label>Message</label>
								<textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<br>
						<div id="success"></div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
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
					<p class="lead mb-0">Freight Forwarder is a company that organizes shipments for individuals to get goods from the manufacturer.
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
