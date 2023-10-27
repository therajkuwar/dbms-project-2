<?php include('server.php') ?>
<!doctype html>
<html>

<head>

	<link rel="shortcut icon" type="image/png" href="./Images/KKWagh Logo.png">
	<link rel="stylesheet" type="text/css" href="stl.css">
	<title>Home-T&P KKWIEER, Nashik</title>

</head>

<body>

	<div class="page-container">

		<div class="bloc bg-repeat bgc-ghost-white l-bloc" id="bloc-0">
			<div class="container bloc-sm">
				<div class="row">
					<div class="col-sm-12">
						<div class="logo">
							<a href="mnit.php"><img src="./Images/KKWagh Logo.png" alt="KK wagh logo" class="head-logo" height="60" align="left" /></a>
						</div>
						<h4 class=" tc-black mg-sm">

							<a class="ltc-black" href="mnit.php">Internship &amp; Placement Portal</a>
						</h4>
						<h6 class=" mg-clear tc-1">
							<a class="pull-left" href="https://engg.kkwagh.edu.in/" target="_blank"> K K Wagh Institute of Engineering Education & Research, Nashik</a><br>
						</h6>
					</div>
				</div>
			</div>
		</div>


		<div class="bloc b-divider l-bloc bgc-white" id="bloc-1">
			<div class="container">
				<div class="row">

					<div class="col-sm-6">
						<ul class="list-unstyled list-horizontal-layout right-align">
							<div class="navi">
								<a href="company.php">Company</a>
							</div>
							<div class="navi">
								<a href="student.php">Student</a>
							</div>
							<div class="navi">

								<a href="admin.php">Admin</a>
							</div>
						</ul>
					</div>
				</div>
			</div>
		</div>





		<div class="bloc bg-Home-Hero-3 bg-tr-edge bgc-united-nations-blue d-bloc" id="bloc-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-123">
						<h3 class=" hero-h mg-clear tc-ghost-white">

						</h3>
					</div>
				</div>
			</div>
		</div>


		<div class="slides">
			<div class="slideshow-container">

				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="./Images/kkwes.jpg" style="width:100%" height="425">
					<div class="text">K K Wagh Institute of Engineering Education & Research, Nashik</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="./Images/kkwes.jpg" style="width:100%" height="425">
					<div class="text">K K Wagh Institute of Engineering Education & Research, Nashik</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="./Images/kkwes.jpg" style="width:100%" height="425">
					<div class="text">K K Wagh Institute of Engineering Education & Research, Nashik</div>
				</div>

			</div>
			<br>

			<div style="text-align:center">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>

			<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
					var i;
					var slides = document.getElementsByClassName("mySlides");
					var dots = document.getElementsByClassName("dot");
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";
					}
					slideIndex++;
					if (slideIndex > slides.length) {
						slideIndex = 1
					}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex - 1].style.display = "block";
					dots[slideIndex - 1].className += " active";
					setTimeout(showSlides, 3000); // Change image every 3 seconds
				}
			</script>
		</div>


		<div class="col-sm-2">
			<h4 class="mg-md bloc-mob-center-text  tc-dim-gray">
				<a href="https://drive.google.com/file/d/1Ur6VGBOyh6PSk_GF2xMJxHTgXPSk1pfN/view?usp=sharing" class="a-btn a-block bloc-mob-center-text">Placement Activities</a>
				<a href="https://drive.google.com/file/d/1N8JH2rH8K-6LcufGfK0gVMBz9HNhPQgu/view?usp=sharing" class="a-btn a-block bloc-mob-center-text">Our Recruiters</a>
			</h4>
		</div>

		<div class="bloc b-divider bgc-ghost-white l-bloc" id="bloc-63">
			<div class="container bloc-md">
				<div class="row">
					<div class="col-sm-2">

					</div>
					<div class="col-sm-1">

						<a class="a-btn a-block bloc-mob-center-text" href="https://engg.kkwagh.edu.in/training_placement/about">About Us</a>
						<a class="a-btn a-block bloc-mob-center-text" href="https://engg.kkwagh.edu.in/training_placement/contact_us">Contact Us</a>
						</h4>
					</div>




					<div class="col-sm-44">
						<h3 class="mg-md  text-right tc-dim-gray">
							Internship &amp; Placement Office
						</h3>
						<p class="text-right">
							K K Wagh Institute of Engineering Education & Research<br>Hirabai Haridas Vidyanagari, Mumbai Agra Road Amrutdham, Panchavati, Nashik<br>Maharashtra 422003
						</p>
						<p class="footer3">
							<strong>Phone</strong> <br><a href="tel:+918390521455">+91-8390521455</a> <br><a href="tel:+919890892202">+91-9890892202</a>
						</p>
						<p class="footer4">
							<strong>Email</strong> <br><a href="mailto:rajkuwar229@gmail.com">placements@kkwieer.ac.in</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>
<script type="text/javascript">
	$("button").click(function() {
		$('html,body').animate({
				scrollTop: $(".alumni").offset().top
			},
			'slow');
	});
</script>

</html>