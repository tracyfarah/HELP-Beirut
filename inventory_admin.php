<!DOCTYPE html>
<?php
require("./php/inventory_admindb.php");
session_start();
$connection = connectDB();
$id = $_SESSION['id'];
?>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Admin Page</title>
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

            <h1 class="page-title">Ogranization Admin Page <span class="title-under"></span></h1>
            <p class="page-description">
                For members of the organization only.
            </p>

        </div>

    </div>

    <div class="main-container fadeIn animated">

        <div class="container">

            <div class="row">

                <div>

                    <h2 class="title-style-2">Your Information <span class="title-under"></span></h2>

                    <div class="form-group col-md-5">
                        <strong>Available Food boxes: </strong>
                        <span id="cl_name">
                            <?php
                            $result = getFood($connection, "SELECT `countof_food_boxes` FROM inventory WHERE Iid = $id");
                            echo $result; ?></span>
                        <form method="POST">
                            <input type="hidden" name="hid_type" value="food">
                            <button type="submit" class="btn pull-right" id="bt_request">Buy Food Boxes</button>
                        </form>
                        <br><br>
                        <strong>Available Medical Kits: </strong><span id="cl_cap">
                            <?php
                            $result = getMed($connection, "SELECT `countof_medical_kits` FROM inventory WHERE Iid = $id");
                            echo $result; ?></span>
                        <form method="POST">
                            <input type="hidden" name="hid_type" value="kits">
                            <button type="submit" class="btn pull-right" id="bt_request">Buy Medical Kits</button>
                        </form>
                        <br><br>
                        <strong>Available Beds: </strong><span id="cl_maxcap">
                            <?php
                            $result = getBeds($connection, "SELECT `countof_beds` FROM inventory WHERE Iid = $id");
                            echo $result; ?></span>
                        <form method="POST">
                            <input type="hidden" name="hid_type" value="beds">
                            <button type="submit" class="btn pull-right" id="bt_request">Buy Beds</button>
                        </form>
                        <br><br>
                        <strong>Budget: </strong><span id="cl_volunteers">
                            <?php
                            $result = getBudget($connection, "SELECT `budget` FROM organization");
                            echo $result; ?>$</span><br><br>
                    </div>
                    <div class="col-md-2"></div>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['hid_type'] == "kits") {
        buyKits($connection, $id);
    }
    if ($_POST['hid_type'] == "food") {
        buyFood($connection, $id);
    }
    if ($_POST['hid_type'] == "beds") {
        buyBeds($connection, $id);
    }
}
?>