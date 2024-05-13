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
	<script src="js/jquery.easydropdown.js"></script>
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
			<div class="dropdown-buttons">
				<div class="dropdown-button">
					<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
						<option value="0">Dubai</option>
						<option value="1">Australia</option>
						<option value="2">Sri Lanka</option>
						<option value="3"> New Zealand</option>
						<option value="4">Pakistan</option>
						<option value="5">United Kingdom</option>
						<option value="6">United states</option>
						<option value="7">Russia</option>
						<option value="8">Mirum</option>
					</select>
				</div>
				<div class="dropdown-button">
					<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
						<option value="0">Hotels</option>
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
					</select>
				</div>
			</div>
			<form>
				<input type="text" value="Keyword, name, date, ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword, name, date, ...';}">
				<div class="contact_btn">
					<label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
				</div>
			</form>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="content_top">
		<div class="container">
			<div class="col-md-4 bottom_nav">
				<div class="content_menu">
					<ul>
						<li class="active"><a href="#">Recommended</a></li>
						<li><a href="#">Latest</a></li>
						<li><a href="#">Highlights</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 content_dropdown1">
				<div class="content_dropdown">
					<select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
						<option value="0">Dubai</option>
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
					</select>
				</div>
				<div class="content_dropdown">
					<select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
						<option value="0">Show Map</option>
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
					</select>
				</div>
			</div>
			<div class="col-md-4 filter_grid">
				<ul class="filter">
					<li class="fil">Filter :</li>
					<li><a href=""> <i class="icon1"> </i> </a></li>
					<li><a href=""> <i class="icon2"> </i> </a></li>
					<li><a href=""> <i class="icon3"> </i> </a></li>
					<li><a href=""> <i class="icon4"> </i> </a></li>
					<li><a href=""> <i class="icon5"> </i> </a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="living_middle">
		<div class="container">
			<h2 class="title block-title">Luxury Rooms</h2>
			<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
				<div class="living_box"><a href="#">
						<img src="images/l1.jpg" class="img-responsive" alt="" />
						<span class="sale-box">
							<span class="sale-label">Rooms</span>
						</span>
					</a>
					<div class="living_desc">
						<h3><a href="#">aliquam volutp</a></h3>
						<p>Lorem ipsum consectetuer adipiscing </p>
						<a href="single.php" class="btn3">Rent</a>
						<p class="price">$100.00</p>
					</div>
					<table border="1" class="propertyDetails">
						<tbody>
							<tr>
								<td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
								<td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
								<td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
				<div class="living_box"><a href="#">
						<img src="images/l2.jpg" class="img-responsive" alt="" />
						<span class="sale-box">
							<span class="sale-label">Rooms</span>
						</span>
					</a>
					<div class="living_desc">
						<h3><a href="#">aliquam volutp</a></h3>
						<p>Lorem ipsum consectetuer adipiscing </p>
						<a href="single.php" class="btn3">Rent</a>
						<p class="price">$89.00</p>
					</div>
					<table border="1" class="propertyDetails">
						<tbody>
							<tr>
								<td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
								<td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
								<td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
				<div class="living_box"><a href="#">
						<img src="images/l3.jpg" class="img-responsive" alt="" />
						<span class="sale-box">
							<span class="sale-label">Rooms</span>
						</span>
					</a>
					<div class="living_desc">
						<h3><a href="#">aliquam volutp</a></h3>
						<p>Lorem ipsum consectetuer adipiscing </p>
						<a href="single.php" class="btn3">Rent</a>
						<p class="price">$100.00</p>
					</div>
					<table border="1" class="propertyDetails">
						<tbody>
							<tr>
								<td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
								<td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
								<td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="living_bottom">
		<div class="container">
			<h2 class="title block-title">Latest Posts</h2>
			<div class="col-md-6 post_left wow fadeInLeft" data-wow-delay="0.4s">
				<div class="mask1"><img src="images/pic4.jpg" alt="image" class="img-responsive zoom-img" /></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla <a href="single.php">More</a></p>
				<div class="divider"></div>
				<p class="field-content">30 Sep 2015</span></p>
			</div>
			<div class="col-md-6 post_left wow fadeInRight" data-wow-delay="0.4s">
				<div class="mask1"><img src="images/pic5.jpg" alt="image" class="img-responsive zoom-img" /></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla <a href="single.php">More</a></p>
				<div class="divider"></div>
				<p class="field-content">30 Sep 2015</span></p>
			</div>
		</div>
	</div>






	<?php include "footer.php"; ?>


</body>

</html>