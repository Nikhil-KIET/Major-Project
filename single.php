<?php
require_once "admin/dbconfig.php";

// Handle comment and rating submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$rating = $_POST["rating"]; // Added to handle rating.
	$detail_id = $_REQUEST['id'];

	// Insert comment
	$insert_comment_query = "INSERT INTO comments (detail_id, name, email, message) VALUES ('$detail_id', '$name', '$email', '$message')";
	$insert_comment_result = mysqli_query($cid, $insert_comment_query);
	$comment_inserted = false;

	if ($insert_comment_result) {
		$comment_inserted = true;
		echo "<script>alert('Comment submitted successfully.');</script>";
	} else {
		echo "<script>alert('Error submitting comment.');</script>";
	}

	// Insert rating - now part of the same form
	if ($comment_inserted) { // Only try to insert the rating if the comment was inserted successfully
		$insert_rating_query = "INSERT INTO ratings (detail_id, rating) VALUES ('$detail_id', '$rating')";
		$insert_rating_result = mysqli_query($cid, $insert_rating_query);

		if ($insert_rating_result) {
			echo "<script>alert('Rating submitted successfully.');</script>";
		} else {
			echo "<script>alert('Error submitting rating.');</script>";
		}
	}
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
	<link rel="stylesheet" href="css/rating.css">
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
</head>

<body>

	<?php include "nav.php"; ?>
	<!--single start here-->
	<div class="single">
		<div class="container">
			<?php
			$ru = select("select * from detail where id='" . $_REQUEST['id'] . "' ");
			while ($t = mysqli_fetch_array($ru)) {
				extract($t);
			?>
				<div class="col-md-8 sing">


					<div class="single-profile">
						<div class="row single-left">
							<?php
							// Fetch a single random image
							$random_image_query = "SELECT * FROM picture WHERE detailid='" . $_REQUEST['id'] . "' ORDER BY RAND() LIMIT 1";
							$random_image_result = select($random_image_query);
							$random_image = mysqli_fetch_array($random_image_result);
							extract($random_image);
							?>
							<div class="col-md-12">
								<img class="img-responsive" src="admin/upload/<?= $image ?>" alt="" class="img-responsive">
							</div>
						</div>
					</div>

					<div class="single-profile">
						<div class="row single-left">
							<?php
							// Fetch up to 4 images
							$ru = select("SELECT * FROM picture WHERE detailid='" . $_REQUEST['id'] . "' LIMIT 4");
							$count = 0;
							while ($t = mysqli_fetch_array($ru)) {
								extract($t);
							?>
								<div class="col-md-3 post-top">
									<img class="img-responsive" style="height:150px;width:100%" src="admin/upload/<?= $image ?>" alt="">
								</div>
							<?php
								$count++;
								if ($count % 4 == 0) {
									echo '<div class="clearfix"></div>'; // Clearfix after every 4 images
								}
							}
							?>
						</div>
					</div>


					<div class=" single-grid">
						<div class="lone-line">
							<h2><?= $title ?></h2>
							<div class="cal">
								<ul>
									<li><span><i class="glyphicon"> </i>₹ <?= $price ?>.00 INR</span></li>
									<li><a href="#"><i class="glyphicon glyphicon-comment"> </i>24</a></li>
								</ul>
							</div>
							<br>
							<h5>CITY: <?= $city ?> | ADDRESS: <?= $address ?> | TYPE: <?= $property ?> </h5>
							<br>
							<h4>ABOUT</h4>
							<p><?= $about ?> </p>
							<br>

							<h4>ROOM DETAILS</h4>
							<p><?= $room_detail ?></p>
							<br>
							<h4>FOOD DETAILS</h4>
							<p><?= $food_detail ?></p>

							<br>
							<h4>FOOD TIMING</h4>
							<p> <?= $food_timing ?></p>


						</div>
					</div>
					<!-- Inside your existing while loop that displays property details -->
					<?php $userid = $_SESSION['userid']; ?>
					<?php $detailid = $_REQUEST['id']; ?>
					<div class="single-bottom">
						<h3>Book This Property</h3>
						<form method="post" action="booking.php">
							<input type="hidden" name="userid" value="<?= $userid ?>">
							<input type="hidden" name="property_id" value="<?= $detailid ?>">
							<input type="hidden" name="price_per_month" value="<?= $price ?>">
							<div class="col-md-4 ">
								<label for="months_booked">Months:</label><br>
								<select name="months_booked" required>
									<option value="1">1 Month</option>
									<option value="2">2 Months</option>
									<option value="3">3 Months</option>
									<option value="4">4 Month</option>
									<option value="5">5 Months</option>
									<option value="6">6 Months</option>
									<option value="7">7 Month</option>
									<option value="8">8 Months</option>
									<option value="9">9 Months</option>
									<option value="10">10 Month</option>
									<option value="11">11 Months</option>
									<option value="12">12 Months</option>
									<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-4 ">
								<label for="start_date">Start Date:</label>
								<input type="date" name="start_date" required>
							</div>
							<!-- <button type="submit" name="submit_booking">Book Now</button> -->
							<input type="submit" name="submit_booking" value="Book">
						</form>
					</div>
					<br>

					<div class=" single-profile">
						<h4> Related Property</h4>
						<div class="single-left ">

							<?php $aa = select("select * from detail order by id desc limit 4");
							while ($rri = mysqli_fetch_array($aa)) {
								extract($rri);
							?>


								<a href="single.php?id=<?= $rri[0] ?>">
									<div class="col-md-3 post-top">
										<?php
										$rui = select("select * from picture where detailid='" . $rri[0] . "' limit 1");
										while ($ti = mysqli_fetch_array($rui)) {
											extract($ti);

										?>
											<img class="img-responsive" style="height:150px;width:100%" src="admin/upload/<?= $image ?>" alt="">
										<?php  } ?>
										<h6><?= $rri['title'] ?></h6>
										<p><?= $rri['about'] ?></p>
									</div>
								</a>

							<?php
							}
							?>

							<div class="clearfix"> </div>
						</div>
					</div>



					<div class="single-bottom">
						<h3>Comments</h3>
						<?php
						// Fetch comments for the current detail
						$comments_query = "SELECT * FROM comments WHERE detail_id='" . $_REQUEST['id'] . "'";
						$comments_result = select($comments_query);

						if (mysqli_num_rows($comments_result) > 0) {
							// If there are comments, display them
							while ($comment = mysqli_fetch_array($comments_result)) {
						?>
								<div class="comment">
									<p style="margin-top: 10px; margin-bottom: 10px;"><strong><?= $comment['name'] ?>:</strong> <?= $comment['message'] ?></p>
								</div>
						<?php
							}
						} else {
							// If there are no comments, display a message
							echo "<p>No Comment Found</p>";
						}
						?>
					</div>
					<br>


					<div class="single-bottom">
						<h3>Rating</h3>
						<?php
						// Assuming $_REQUEST['id'] contains the detail_id
						$detailId = $_REQUEST['id'];
						$averageRating = getAverageRating($detailId);
						?>
						<p><?php echo number_format($averageRating, 1); ?> stars</p>
					</div>
					<br>

					<div class="single-bottom">
						<h3>Leave a Comment and Rating</h3>
						<form method="post" action="">
							<div class="rating">
								<input type="radio" id="star5" name="rating" value="5" required />
								<label class="star" for="star5">&#9733;</label>
								<input type="radio" id="star4" name="rating" value="4" required />
								<label class="star" for="star4">&#9733;</label>
								<input type="radio" id="star3" name="rating" value="3" required />
								<label class="star" for="star3">&#9733;</label>
								<input type="radio" id="star2" name="rating" value="2" required />
								<label class="star" for="star2">&#9733;</label>
								<input type="radio" id="star1" name="rating" value="1" required />
								<label class="star" for="star1">&#9733;</label>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-6 comment">
								<input type="text" name="name" placeholder="Name" required>
							</div>
							<div class="col-md-6 comment">
								<input type="text" name="email" placeholder="Email" required>
							</div>
							<div class="clearfix"></div>
							<textarea name="message" placeholder="Message" required></textarea>

							<input type="submit" name="submit" value="Send">
						</form>
					</div>

				</div>
				<div class="col-md-3 categories-grid">
					<div class="grid-categories">
						<h4>AMENITIES</h4>
						<ul class="popular ">
							<?php if ($parking == 1) { ?>
								<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Parking</a></li>
							<?php }
							if ($wifi == 1) { ?>
								<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Wifi</a></li>
							<?php }
							if ($almirah == 1) { ?>
								<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Almirah</a></li>
							<?php }
							if ($bedsheet == 1) { ?>
								<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Bedsheet</a></li>
							<?php }
							if ($wifi == 1) { ?>
								<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>CCTV</a></li>
							<?php }
							if ($ac == 1) { ?>
								<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>AC</a></li>
							<?php }
							if ($washroom == 1) { ?>
								<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Washroom</a></li>
							<?php }
							if ($housekeeping == 1) { ?>
								<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>House Keeping</a></li>
							<?php }
							if ($drinking_water == 1) { ?>
								<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Drinking Water</a></li>
							<?php } ?>
						</ul>
					</div>

				</div>
				<div class="clearfix"> </div>

			<?php } ?>

		</div>
	</div>

	<!--//single end here-->
	<?php include "footer.php"; ?>
</body>

</html>