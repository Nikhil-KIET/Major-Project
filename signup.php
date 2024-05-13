<?php
require_once "admin/dbconfig.php";
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Online Paying Guest</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Hotel Deluxe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--webfont-->
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
</head>

<body>
	<?php include "nav.php"; ?>
	</br>
	</br>
	</br>
	</br>

	<div class="col-lg-3 "></div>
	<div class="col-lg-6 ">
		<?php
		if (isset($_REQUEST['login'])) {
			extract($_REQUEST);
			$n = iud("INSERT INTO `register`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')");
			if ($n == 1) {
				echo "<div class='alert alert-success'>Successful</div>";
			} else {
				echo "<div class='alert alert-danger'>Something Went Wrong</div>";
			}
		}
		?>
		<form method="post">
			<div class="form-group">
				<label for="email">Name </label>
				<input type="text" class="form-control" name="name" id="email">
			</div>
			<div class="form-group">
				<label for="email">Email </label>
				<input type="text" class="form-control" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="email">Mobile</label>
				<input type="text" class="form-control" name="mobile" id="email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>
			<div class="form-group">
				<input type="submit" name="login" class="btn btn-warning" id="login" value="Signup">
			</div>

		</form>

		<div class="clearfix"></div>
	</div>

	<?php include "footer.php"; ?>
</body>

</html>