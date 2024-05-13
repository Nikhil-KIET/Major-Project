<div class="header">
	<div class="col-sm-8 header-left">
		<div class="logo">
			<!-- <a href="index.php"><img src="images/logo.png" alt="" /></a> -->
			<a href="index.php">
				<h1>ONLINE PG DEKHO</h1>
			</a>
		</div>
		<div class="menu">
			<a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
			<ul class="nav" id="nav">
				<?php
				if (isset($_SESSION['userlogin'])) {
				?>
					<li><a href="#">Welcome, &nbsp;<?= $_SESSION['username'] ?></a></li>

					<li><a href="logout.php">Logout</a></li>

				<?php
				} else {
				?>
					<li><a href="signup.php">Signup</a></li>
					<li><a href="login.php">Login</a></li>

				<?php
				}
				?>
				<div class="clearfix"></div>
			</ul>
			<script type="text/javascript" src="js/responsive-nav.js"></script>
		</div>
	</div>

	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script>
		new UISearch(document.getElementById('sb-search'));
	</script>
	<div class="clearfix"></div>


	<div class="clearfix"></div>
</div>