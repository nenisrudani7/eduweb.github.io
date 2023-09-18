<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "admission";

$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn) {
	echo "Succefully connected to database";
} else {
	echo "Not connected to database" . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>SmartEDU - Education Responsive HTML5 Template</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
	.co1 {
		border: 2px solid black;
		padding: 20px;
		margin: auto;
		border-radius: 10px;
		margin-top: 20px;
		width: 800px;
	}

	.container .btn {
		margin-top: 10px;
		margin-left: 45%;
		cursor: pointer;
	}

	.container .fo {
		margin-top: 10vh;
	}
</style>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img style="width:10vw;height:10vh" src="images/logo234.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Course </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.html">Medical</a>
								<a class="dropdown-item" href="course-grid-2.html">Pharmacy</a>
								<a class="dropdown-item" href="course-grid-2.html">Engineering</a>
								<a class="dropdown-item" href="course-grid-2.html">Managment</a>
								<a class="dropdown-item" href="course-grid-2.html">Agriculture</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">campus </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="j.html">Video gallary
								</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="pricing.html">Paid Course</a></li>
						<li class="nav-item active"><a class="nav-link" href="enroll.php">Enroll</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>

				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Enroll<span class="m_1">fill the form given below</span></h1>
		</div>
	</div>

	<div id="contact" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Need Help? Sure we are Online!</h3>
				<p class="lead"> Please fill out the form below.</p>
			</div><!-- end title -->

			<div class="container co1">
				<h1 style="margin-left: 40%;">Please Enter Your Details</h1>
				<form class="form" action="#" method="POST">
					<div class="container2">
						<div class="mb-3">
							<label for="exampleInputname" class="form-label">Name:</label>
							<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<label for="exampleInputgender" class="form-label">Gender:</label>
						<select class="form-select" name="gender" aria-label="Default select example">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
						</div>
						<label for="exampleInputgender" class="form-label">Country:</label>
						<select class="form-select" name="country" aria-label="Default select example">
							<option value="Bharat">Bharat</option>
							<option value="USA">USA</option>
						</select>
						<div class="mb-3">
							<label for="exampleInputmono" class="form-label">Mobile Number:</label>
							<input type="text" name="mo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<label for="exampleInputCourse" class="form-label">Course:</label>
						<select class="form-select" name="course" aria-label="Default select example">
							<option value="CE">CE</option>
							<option value="IT">IT</option>
						</select>
						<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>

			<div class="fo">

				<footer class="footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="widget clearfix">
									<div class="widget-title">
										<h3>About US</h3>
									</div>
									<p>We believe that our Collage  is place where “Change” happens. As the History know our collage is prepare student to face the realife challanges. Our Collage include many field such as engineering ,medical, Pharmacy,Managment,Agriculture.</p>
									<div class="footer-right">
										<ul class="footer-links-soi">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-github"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul><!-- end links -->
									</div>
								</div><!-- end clearfix -->
							</div><!-- end col -->

							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="widget clearfix">
									<div class="widget-title">
										<h3>Information Link</h3>
									</div>
									<ul class="footer-links">
										<li><a href="index.html">Home</a></li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">Course</a></li>
										<li><a href="enroll.php">Enroll</a></li>
										<li><a href="contact.php">Contact</a></li>
									</ul><!-- end links -->
								</div><!-- end clearfix -->
							</div><!-- end col -->

							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="widget clearfix">
									<div class="widget-title">
										<h3>Contact Details</h3>
									</div>

									<ul class="footer-links">
										<li><a href="mailto:#">info@yoursite.com</a></li>
										<li><a href="#">www.yoursite.com</a></li>
										<li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
										<li>+61 3 8376 6284</li>
									</ul><!-- end links -->
								</div><!-- end clearfix -->
							</div><!-- end col -->

						</div><!-- end row -->
					</div><!-- end container -->
				</footer><!-- end footer -->

				<div class="copyrights">
					<div class="container">
						<div class="footer-distributed">
							<div class="footer-center">
								<p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SmartEDU</a> Design By : <a href="https://html.design/">Warrior</a></p>
							</div>
						</div>
					</div><!-- end container -->
				</div><!-- end copyrights -->
			</div>
			<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

			<!-- ALL JS FILES -->
			<script src="js/all.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
			<!-- Mapsed JavaScript -->
			<script src="js/mapsed.js"></script>
			<script src="js/01-custom-places-example.js"></script>
			<!-- ALL PLUGINS -->
			<script src="js/custom.js"></script>

</body>

</html>

<?php
if (isset($_POST['name'])) {

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$mo = $_POST['mo'];
	$course = $_POST['course'];
	$sql = "INSERT INTO sih (name,gender,email,country,mo,course) VALUES
		 ('$name','$gender','$email','$country','$mo','$course');";

	//  echo $sql;

	if ($conn->query($sql) == true) {
		// echo "Successfully inserted";
	} else {
		echo "ERROR: $sql <br> $conn->error";
	}

	$conn->close();
}

?>