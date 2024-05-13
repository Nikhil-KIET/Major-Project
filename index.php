<?php
require_once "admin/dbconfig.php";
if (isset($_SESSION['userlogin'])) {
} else {
	header("location:login.php");
}
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
	<script src="js/jquery.easydropdown.js"></script>
	<!--Animation-->
	<script src="js/wow.min.js"></script>
	<link href="css/animate.css" rel='stylesheet' type='text/css' />
	<script>
		new WOW().init();
	</script>
</head>

<body>

	<?php include "nav.php"; ?>
	<div class="banner">
		<div class="container_wrap">
			<h1>What are you looking for?</h1>
			<form method="post">
				<div class="dropdown-buttons">
					<div class="dropdown-button">
						<select class="dropdown" tabindex="9" name="city" data-settings='{"wrapperClass":"flat"}'>
							<option value="">Select City</option>
							<?php
							$t = select("select * from city");
							while ($r = mysqli_fetch_array($t)) {
							?>
								<option value="<?= $r[1] ?>"><?= $r[1] ?></option>

							<?php
							}
							?>

						</select>
					</div>
					<div class="dropdown-button">
						<select class="dropdown" tabindex="9" name="property" data-settings='{"wrapperClass":"flat"}'>
							<option value="">Select Property</option>
							<option value="PG">PG</option>
							<option value="FLAT">FLAT</option>

						</select>
					</div>
				</div>

				<input type="text" placeholder="Keyword, name, date, ..." name="title" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword, name, date, ...';}">
				<div class="contact_btn">
					<label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
				</div>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="content_middle">
		<div class="container">
			<div class="content_middle_box">
				<div class="top_grid">
					<?php
					if (isset($_REQUEST['submit'])) {
						extract($_REQUEST);

						$aa = "select * from detail where 1>0";
						if ($city != '') {
							$aa .= " and city='$city'";
						}
						if ($property != '') {
							$aa .= " and property='$property'";
						}
						if ($title != '') {
							$aa .= " and title like '%$title%'";
						}
						$aa .= " order by id desc limit 4";
						$nt = select($aa);
						$u = mysqli_num_rows($nt);
						if ($u >= 1) {

							while ($rr = mysqli_fetch_array($nt)) {
								extract($rr);

					?>
								<div class="col-md-3 index-grids">
									<a href="single.php?id=<?= $rr[0] ?>">
										<div class="grid1" style="height:300px">
											<div class="view view-first">
												<div class="index_img">
													<?php
													$ru = select("select * from picture where detailid='" . $rr[0] . "' limit 1");
													while ($t = mysqli_fetch_array($ru)) {
														extract($t);
													?>
														<img src="admin/upload/<?= $image ?>" style="height:200px" class="img-responsive" alt="" />
													<?php } ?>
												</div>
												<div class="sale"><?= $price ?></div>
											</div>
											<i class="home"></i>
											<div class="inner_wrap">
												<ul class="item_module">
													<li class="module_right">
														<h5><?= ucwords($title) ?></h5>
														<!-- Font Awesome Rating stars below title -->
														<div class="rating">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star-half-alt"></i>
														</div>
														<h6>City: <?= ucwords($city) ?></h6>
														<p><?= $address ?></p><br>
													</li>
												</ul>
											</div>
										</div>
									</a>
								</div>


							<?php
							}
						} else {
							echo "<div class='alert alert-danger'>No Data Found</div>";
						}
					} else {
						$aa = select("select * from detail order by id desc limit 4");
						while ($rri = mysqli_fetch_array($aa)) {
							extract($rri);

							?>
							<div class="col-md-3 index-grids">
								<a href="single.php?id=<?= $rri[0] ?>" class="content_btn">
									<div class="grid1" style="height:300px">
										<div class="view view-first">
											<div class="index_img">
												<?php
												$rui = select("select * from picture where detailid='" . $rri[0] . "' limit 1");
												while ($ti = mysqli_fetch_array($rui)) {
													extract($ti);
												?>
													<img src="admin/upload/<?= $image ?>" style="height:200px" class="img-responsive" alt="" />
												<?php } ?>
											</div>
											<div class="sale"><?= $price ?></div>
										</div>
										<i class="home"></i>
										<div class="inner_wrap">
											<ul class="item_module">
												<li class="module_right">
													<h5><?= ucwords($title) ?></h5>
													<!-- Font Awesome Rating stars below title -->
													<div class="rating">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
													</div>
													<p><?= $address ?></p>
												</li>
											</ul>
										</div>
									</div>
								</a>
							</div>

					<?php
						}
					}
					?>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="offering">
				<h2>About Online PG Dekho.</h2>
				<p>Finding the right PG (Online PG Dekho) accommodation can be a transformative experience, especially for students and young professionals embarking on a new phase of their lives. A good PG offers much more than just a place to stay; it provides a home away from home, where residents can find comfort, security, and a sense of community.</p>
				<ul class="icons wow fadeInUp" data-wow-delay="0.4s">
					<li><i class="icon1"> </i><span class="one"> </span></li>
					<li><i class="icon2"> </i><span class="two"> </span></li>
					<li><i class="icon3"> </i><span class="three"> </span></li>
					<li><i class="icon4"> </i><span class="four"> </span></li>
					<li><i class="icon5"> </i></li>
				</ul>
			</div>
		</div>
	</div>
	</div>
	<?php include "footer.php"; ?>
</body>

</html>