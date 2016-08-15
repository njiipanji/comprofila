<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/img/favicon.png">
	<title>Company Org | UNIT <?php echo $_GET['id']; ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<?php include "header.php"; ?>

		<div class="row marketing">
			<img src="assets/img/unit.png" height="300px" width="100%">
		</div>

		<?php include "navbar.php"; ?>

		<div class="row marketing">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="unit-sidebar-header">
					<h4>Our Bussiness Unit</h4>
				</div>
				<div class="unit-sidebar-list">
					<ul>
						<li role="presentation"><a href="unit.php?id=1"><?php if ($_GET['id']==1) {echo "<i class='fa fa-chevron-right'></i>";} ?> UNIT 1</a></li>
						<li role="presentation"><a href="unit.php?id=2"><?php if ($_GET['id']==2) {echo "<i class='fa fa-chevron-right'></i>";} ?> UNIT 2</a></li>
						<li role="presentation"><a href="unit.php?id=3"><?php if ($_GET['id']==3) {echo "<i class='fa fa-chevron-right'></i>";} ?> UNIT 3</a></li>
						<li role="presentation"><a href="unit.php?id=4"><?php if ($_GET['id']==4) {echo "<i class='fa fa-chevron-right'></i>";} ?> UNIT 4</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9 col-md-9 col-lg-9">
				<div class="unit-title-page">UNIT <?php echo $_GET['id'] ?></div>
				<div class="unit-content-page">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="unit-footer-page"><i class="fa fa-question"></i> For more information, please visit this <a href="#"><strong>link</strong></a></div>
			</div>
		</div>

		<footer class="footer">
			<p>Copyright &copy; Company Org 2016</p>
		</footer>
	</div>

	<script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>