<!DOCTYPE HTML>
<html>
	<head>
		<title>IAMDER</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
					<?php
						include ("require/menu.php");
					 ?>
				</header>
			</div>

		<!-- Banner -->
			<div id="banner-wrapper">
				<div id="banner" class="box container">
					<div class="row">
						<div >
							<h2><center>Bienvenido al Instituto Autónomo de Deporte y Recreación</center> </h2>

						</div>

					</div>
				</div>
			</div>

		<!-- Features -->
			<div id="features-wrapper">
				<div class="container">
					<div class="row">
						<div class="4u">

							<!-- Box -->
								<section class="box feature">
									<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
									<div class="inner">
										<header>
											<h2>Put something here</h2>
											<p>Maybe here as well I think</p>
										</header>
										<?php //include('../calendario2/index.php'); ?>
										<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
									</div>
								</section>

						</div>
						<div class="4u">

							<!-- Box -->
								<section class="box feature">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<div class="inner">
										<header>
											<h2>An interesting title</h2>
											<p>This is also an interesting subtitle</p>
										</header>
										<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
									</div>
								</section>

						</div>
						<div class="4u">

							<!-- Box -->
								<section class="box feature last">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<div class="inner">
										<header>
											<h2>Oh, and finally ...</h2>
											<p>Here's another intriguing subtitle</p>
										</header>
										<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
									</div>
								</section>

						</div>
					</div>
				</div>
			</div>

		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="4u">

							<!-- Sidebar -->
								<div id="sidebar">
									<section class="widget thumbnails">
										<h3>Interesting stuff</h3>
										<div class="grid">
											<div class="row no-collapse 50%">
												<div class="6u"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
												<div class="6u"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
											</div>
											<div class="row no-collapse 50%">
												<div class="6u"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
												<div class="6u"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
											</div>
										</div>
										<a href="#" class="button icon fa-file-text-o">More</a>
									</section>
								</div>

						</div>
						<div class="8u important(collapse)">

							<!-- Content -->
								<div id="content">
									<section class="last">
										<h2>So what's this all about?</h2>
										<p>This is <strong>Verti</strong>, a free and fully responsive HTML5 site template by <a href="http://html5up.net">HTML5 UP</a>.
										Verti is released under the <a href="http://html5up.net/license">Creative Commons Attribution license</a>, so feel free to use it for any personal or commercial project you might have going on (just don't forget to credit us for the design!)</p>
										<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
										<a href="#" class="button icon fa-arrow-circle-right">Continue Reading</a>
									</section>
								</div>

						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<?php
				include ("require/footer.php");
			 ?>

	</body>
</html>