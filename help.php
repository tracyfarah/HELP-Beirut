<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<title>Request Help</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootsrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Font awesome -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Template main Css -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Modernizr -->
	<script src="assets/js/modernizr-2.6.2.min.js"></script>

</head>

<body>
	<!-- NAVBAR
    ================================================== -->

	<header class="main-header">


		<nav class="navbar navbar-static-top">

			<div class="navbar-top">

				<div class="container">
					<div class="row">

						<div class="col-sm-6 col-xs-12">

							<ul class="list-unstyled list-inline header-contact">
								<li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
								<li> <i class="fa fa-envelope"></i> <a
										href="mailto:contact@sadaka.org">contact@sadaka.org</a> </li>
							</ul> <!-- /.header-contact  -->

						</div>

						<div class="col-sm-6 col-xs-12 text-right">

							<ul class="list-unstyled list-inline header-social">

								<li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
								<li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
								<li> <a href="#"> <i class="fa fa-google"></i> </a> </li>
								<li> <a href="#"> <i class="fa fa-youtube"></i> </a> </li>
								<li> <a href="#"> <i class="fa fa fa-pinterest-p"></i> </a> </li>
							</ul> <!-- /.header-social  -->

						</div>


					</div>
				</div>

			</div>

			<div class="navbar-main">

				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#navbar" aria-expanded="false" aria-controls="navbar">

							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>

						</button>


					</div>

					<div id="navbar" class="navbar-collapse collapse pull-right">

						<ul class="nav navbar-nav">

							<li><a href="index.html">HOME</a></li>

							<li class="has-child"><a href="causes.html">WHAT WE NEED</a>

								<ul class="submenu">
									<li class="submenu-item"><a href="causes-single.html">Food boxes </a></li>
									<li class="submenu-item"><a href="causes-single.html">Medical kits </a></li>
									<li class="submenu-item"><a href="causes-single.html">Beds </a></li>
								</ul>

							</li>
							<li><a href="help.php">REQUEST HELP</a></li>
							<li><a href="donations.php">DONATE</a></li>
							<li><a href="volunteer.php">VOLUNTEER</a></li>
							<li><a href="about.html">ABOUT US</a></li>
							<li id="right"><a href="login.php">LOGIN</a></li>

						</ul>

					</div> <!-- /#navbar -->

				</div> <!-- /.container -->

			</div> <!-- /.navbar-main -->


		</nav>

	</header> <!-- /. main-header -->

	<div class="page-heading text-center">

		<div class="container zoomIn animated">

			<h1 class="page-title">REQUEST HELP <span class="title-under"></span></h1>
			<p class="page-description">
				If you need help or know families in urgent need please fill all the<br>
				info below and we will review it and provide you with the help needed.<br>

			</p>

		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">Fill this Form <span class="title-under"></span></h2>

					<form method="POST" class="contact-form ajax-form">

						<div class="row">

							<div class="form-group col-md-8">
								<label for="txt_famname"><strong>Name *</strong></label>
								<input type="text" name="txt_famname" class="form-control" placeholder="Enter Name" id="txt_username" required>
							</div>

							<div class="form-group col-md-8">
								<label for="txt_ssn"><strong>Social Security Number *</strong></label>
								<input type="number" name="txt_ssn" class="form-control" placeholder="Enter SSN" id="txt_ssn" required>
							</div>


							<div class="form-group col-md-8">
								<label for="txt_phone"><strong>Phone Number *</strong></label>
								<input type="number" name="txt_phone" class="form-control" placeholder="Enter Phone Number" id="txt_phone" required>
							</div>

							<div class="form-group col-md-8">
								<label for="txt_addr"><strong>Address *</strong></label>
								<textarea name="txt_addr" id="txt_addr" class="form-control" placeholder="Enter your full address here." required></textarea>
							</div>

							<div class="form-group col-md-8">
								<label for="txt_email"><strong>Email Address</strong> (optional)</label>
								<input type="text" name="txt_email" class="form-control" placeholder="Enter Email Address" id="txt_email">
							</div>

							<div class="form-group col-md-8">
								<label for="txt_members"><strong>Family Members *</strong></label>
								<input type="number" name="txt_members" id="txt_members" min="1" max="10" value="1">
							</div>

							<div class="form-group col-md-8">
								<label for="txt_helptype"><strong>What type of help do you need?</strong></label><br>
								<input type="radio" id="radio_food" name="help" value="radio_food">
								<label for="radio_food" style="font-weight: normal;">Food</label><br>
								<input type="radio" id="radio_shelter" name="help" value="radio_shelter">
								<label for="radio_shelter" style="font-weight: normal;">Shelter</label><br>
								<input type="radio" id="radio_medical" name="help" value="radio_medical">
								<label for="radio_medical" style="font-weight: normal;">Medical Attention</label><br>
								<label for="txt_qty" style="margin-right: 5px;"><strong>Quantity</strong></label>
								<input type="number" name="txt_qty" id="txt_qty" min="1" max="10" value="1">
							</div>

							<div class="form-group col-md-8">
								<label for="txt_cmts"><strong>Other Comments</strong></label>
								<textarea name="txt_cmts" id="txt_cmts" class="form-control" placeholder="Leave your comments here."></textarea>
							</div>


						</div>
						<div class="form-group">
							<button type="submit" id="bt-request" class="btn btn-primary pull-5">Submit request</button>
						</div>
					</form>
				</div>
			</div> <!-- /.row -->
		</div>
	</div>




	<footer class="main-footer">

		<div class="footer-top">

		</div>


		<div class="footer-main">
			<div class="container">

				<div class="row">
					<div class="col-md-4">

						<div class="footer-col">

							<h4 class="footer-title">About us <span class="title-under"></span></h4>

							<div class="footer-content">
								<p>
									<strong>Sadaka</strong> ipsum dolor sit amet, consectetur adipiscing elit. Ut at
									eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis
									neque vel, maximus lacinia urna.
								</p>

								<p>
									ILorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis
									viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus
									lacinia urna.
								</p>

							</div>

						</div>

					</div>

					<div class="col-md-4">

						<div class="footer-col">

							<h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

							<div class="footer-content">
								<ul class="tweets list-unstyled">
									<li class="tweet">

										20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar
										http://t.co/fTSazikPd4

									</li>

									<li class="tweet">

										20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar
										http://t.co/fTSazikPd4

									</li>

									<li class="tweet">

										20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar
										http://t.co/fTSazikPd4

									</li>

								</ul>
							</div>

						</div>

					</div>


					<div class="col-md-4">

						<div class="footer-col">

							<h4 class="footer-title">Contact us <span class="title-under"></span></h4>

							<div class="footer-content">

								<div class="footer-form">

									<form action="php/mail.php" class="ajax-form">

										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Name" required>
										</div>

										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="E-mail" required>
										</div>

										<div class="form-group">
											<textarea name="message" class="form-control" placeholder="Message" required></textarea>
										</div>

										<div class="form-group alerts">

											<div class="alert alert-success" role="alert">

											</div>

											<div class="alert alert-danger" role="alert">

											</div>

										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-submit pull-right">Send
												message</button>
										</div>

									</form>

								</div>
							</div>

						</div>

					</div>
					<div class="clearfix"></div>



				</div>


			</div>
		</div>

		<div class="footer-bottom">

			<div class="container text-right">
				Sadaka @ copyrights 2015 - by <a href="http://www.ouarmedia.com" target="_blank">Ouarmedia</a>
			</div>
		</div>

	</footer>
</body>

</html>

<?php
require("./php/helpdb.php");
$connection = connectDB();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo $_POST['txt_email'];
	$result = addRequest($connection, $_POST["txt_famname"], $_POST["txt_ssn"], $_POST["txt_phone"], $_POST["txt_addr"], $_POST["txt_email"], $_POST["txt_members"], $_POST['help'], $_POST['txt_qty']);
	if ($result == 1) {
		echo "<script type='text/javascript'>alert('Request sent. We will get in contact with you shortly');</script>";
	}
	if ($result == 2) {
		echo "<script type='text/javascript'>alert('Request denied. Please note that a maximum of one box per 3 members can be ordered.');</script>";
	}
	if ($result == -2) {
		echo "<script type='text/javascript'>alert('We are sorry. There is not enough supplies to help you at the moment.');</script>";
	}
}
?>