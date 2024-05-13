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
	<!--Animation-->
	<script src="js/wow.min.js"></script>
	<link href="css/animate.css" rel='stylesheet' type='text/css' />
	<script>
		new WOW().init();
	</script>
</head>

<body>

	<?php include "nav.php"; ?>
	<div class="contact">
		<div class="container">
			<h1>Contact Us</h1>
			<div class="col-md-9 wow fadeInLeft" data-wow-delay="0.4s">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
				</div>
			</div>
			<div class="col-md-3 wow fadeInRight" data-wow-delay="0.4s">
				<address class="address">
					<p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
					<dl>
						<dt></dt>
						<dd>Freephone:<span> +1 800 254 2478</span></dd>
						<dd>Telephone:<span> +1 800 547 5478</span></dd>
						<dd>FAX: <span>+1 800 658 5784</span></dd>
						<dd>E-mail:&nbsp; <a href="mailto:info@example.com">info(at)Hotel Deluxe.com</a></dd>
					</dl>
				</address>
			</div>
		</div>
	</div>
	<div class="living_middle wow fadeInUp" data-wow-delay="0.4s">
		<div class="container">
			<h2>Feedback</h2>
			<form>
				<div class="to">
					<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
					<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:20px">
					<div class="clearfix"></div>
				</div>
				<div class="text">
					<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
				</div>
				<div class="form-submit1">
					<input name="submit" type="submit" id="submit" value="Send Message">

				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>

</html>