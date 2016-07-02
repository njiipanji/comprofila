<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/img/favicon.png">
	<title>Company Name | Home</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right">
					<li role="presentation" class="active"><a href="index.php">Home</a></li>
					<li role="presentation"><a href="#">About</a></li>
					<li role="presentation"><a href="contact.php">Contact</a></li>
				</ul>
				<h3 class="text-muted"><a href="index.php"><span><img src="assets/img/favicon.png"></span> Company</a></h3>
			</nav>
		</div>
		<div id="slideshow" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="assets/img/slide1.png" alt="Slide1" width="100%">
			<!--	<div class="carousel-caption"> <p>Description1</p> </div> -->
				</div>
				<div class="item">
					<img src="assets/img/slide2.png" alt="Slide2" width="100%">
				</div>
				<div class="item">
					<img src="assets/img/slide3.png" alt="Slide3" width="100%">
				</div>
				<div class="item">
					<img src="assets/img/slide4.png" alt="Slide4" width="100%">
				</div>
			</div>

			<a class="left carousel-control" href="#slideshow" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previouse</span></a>
			<a class="right carousel-control" href="#slideshow" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
		</div>

		<hr class="featurette-divider">

		<div class="row marketing">
			<div class="col-md-7 col-lg-7">
				<h2 class="featurette-heading"><i class="fa fa-list-alt" aria-hidden="true"></i> Latest News</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-5 col-lg-5">
				<img src="assets/img/news.png" style="width:100%;">
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row marketing">
			<div class="col-lg-4">
				<h3><i class="fa fa-group"></i> IBW Group</h3>
				<img src="assets/img/thumb-ibw.png">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua...</p>
				<a href="#" class="btn btn-default" role="button">More</a>
			</div>
			<div class="col-lg-4">
				<h3><i class="fa fa-building-o"></i> Bussiness Unit</h3>
				<img src="assets/img/thumb-bu.png">
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat...</p>
				<a href="#" class="btn btn-default" role="button">More</a>
			</div>
			<div class="col-lg-4">
				<h3><i class="fa fa-envelope"></i> Contact Us</h3>
				<img src="assets/img/thumb-ctc.png">
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<a href="contact.php" class="btn btn-default" role="button">More</a>
			</div>
		</div>

		<footer class="footer">
			<p>Copyright &copy; Company Name 2016</p>
		</footer>
	</div>

	<script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.carousel').carousel({
			interval: 3500
		})
	});
</script>
</body>
</html>