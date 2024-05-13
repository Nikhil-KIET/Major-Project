<?php
require_once "admin/dbconfig.php";
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Online Paying Guest</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
			$n = select("select * from register where email='$email' and password='$password'");
			$t = mysqli_num_rows($n);
			if ($t == 1) {
				while ($y = mysqli_fetch_array($n)) {
					$_SESSION['userlogin'] = 'yes';
					$_SESSION['userid'] = $y[0];
					$_SESSION['username'] = $y[1];
					echo "<script>window.location='index.php';</script>";
				}
			} else {
				echo "<div class='alert alert-danger'> Something Went Wrong..</div>";
			}
		}

		?>
		<form method="post">
			<div class="form-group">
				<label for="email">Email </label>
				<input type="text" class="form-control" name="email" id="email">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-warning" name="login" id="login" value="Login">
			</div>

		</form>

		<div class="clearfix"></div>
	</div>

	<?php include "footer.php"; ?>
</body>

</html>