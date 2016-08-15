<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/img/favicon.png">
	<title>Company Org | Home</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<?php include "header.php"; ?>

		<div class="row marketing" style="padding: 0px 15px">
			<div id="slideshow" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active imgcarousel">
						<img class="imgcarousel" src="assets/img/slide1.png" alt="Slide1" width="100%">
					</div>
					<div class="item imgcarousel">
						<img class="imgcarousel" src="assets/img/slide2.png" alt="Slide2" width="100%">
					</div>
					<div class="item imgcarousel">
						<img class="imgcarousel" src="assets/img/slide3.png" alt="Slide3" width="100%">
					</div>
					<div class="item imgcarousel">
						<img class="imgcarousel" src="assets/img/slide4.png" alt="Slide4" width="100%">
					</div>
				</div>

				<a class="left carousel-control" href="#slideshow" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previouse</span></a>
				<a class="right carousel-control" href="#slideshow" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
			</div>
		</div>

		<?php include "navbar.php"; ?>

		<div class="row marketing">
			<div class="col-md-4 col-lg-4 marketbox">
				<h3 class="bottom-content">
					<span class="fa fa-newspaper-o" aria-hidden="true"></span> LATEST NEWS
				</h3>
				<img src="assets/img/thumb-news.png" class="img-thumb img-responsive">
				<span>
					<p>
						<strong>July, 4th 2016</strong><br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</span>
			</div>
			<div class="col-md-4 col-lg-4 marketbox">
				<h3 class="bottom-content">
					<span class="fa fa-bullhorn" aria-hidden="true"></span> HIGHLIGHTS OF THE DAY
				</h3>
				<img src="assets/img/thumb-highlights.png" class="img-thumb img-responsive">
				<span>
					<p>
						<strong>June, 30th 2016</strong><br>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
				</span>
			</div>
			<div class="col-md-4 col-lg-4 marketbox">
				<h3 class="bottom-content">
					<span class="fa fa-envelope-o" aria-hidden="true"></span> CONTACT US
				</h3>
				<img src="assets/img/thumb-ctc.png" class="img-thumb img-responsive">
				<span>
					<p>
						<strong>Head Office</strong><br>
						Jalan Teknik Hidrodinamika VIII 98, Surabaya, Indonesia.<br>
						+6231 1234567<br>
						+6281 2345 6789
					</p>
				</span>
			</div>
		</div>

		<footer class="footer">
			<p>Copyright &copy; Company Org 2016</p>
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