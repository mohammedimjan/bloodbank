<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Safewest Hospitals</title>
</head>

<body>


	<?php include 'header.php' ?>

	<section class="home">
		<div class="home-col-heading">
			<h1><span>Welcome</span> To Safewest Bloodbank</h1>
			<p>Safwest Bloodbank: Providing safe and reliable blood supply to save lives. Thank you for choosing us as your partner in giving the gift of life.</p>
			<div class="contact-btn">
				<button><a href="contact.php">Contact US</a></button>
			</div>
		</div>
		<div class="home-col-img">
			<img src="images/home.png" alt="Home">
		</div>
	</section>


	<section class="container">
		<div class="main-text">
			<h2>Services</h2>
			<p>SafeWest Hospital's Blood Bank Services are available to those in need. If you require blood, we can help you search for a donor or you can login as a donor to make a difference</p>
		</div>


		<div class="container-box">
			<a href="registration.php">
			<div class="c-mainbx">
				<div class="container-img">
					<img src="images/1.png" alt="">
				</div>
				<div class="container-text">
					<p>Donate Blood</p>
				</div>
			</div>
			</a>

			<a href="login.php">
			<div class="c-mainbx">
				<div class="container-img">
					<img src="images/2.png" alt="">
				</div>
				<div class="container-text">
					<p>Donor Login</p>
				</div>
			</div>
			</a>


			<a href="requests.php">
			<div class="c-mainbx">
				<div class="container-img">
					<img src="images/3.png" alt="">
				</div>
				<div class="container-text">
					<p>Request Blood</p>
				</div>
			</div>
			</a>

			<a href="searchblood.php">
			<div class="c-mainbx">
				<div class="container-img">
					<img src="images/4.png" alt="">
				</div>
				<div class="container-text">
					<p>Check Blood</p>
				</div>
			</div>
			</a>
		</div>
	</section>

	<section class="qoute">
		<i class="fa-solid fa-quote-left"></i>
		<h3>Give blood, give life.</h3>
	</section>


	<section>
		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7916.21664362243!2d80.19844655!3d7.228484250000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae31c7a000e3133%3A0x9815334b37f56c1c!2sWarakapola!5e0!3m2!1sen!2slk!4v1678163860053!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>

	<section class="pay-charity">
		<i class="fa-solid fa-quote-left"></i>
		<h3>Spread kindness and love by donating to our charity. Your contributions will make a world of difference and bring hope to those in need.</h3>
		<a href=""><button>Pay For Charity</button></a>
	</section>

	<script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7916.21664362243!2d80.19844655!3d7.228484250000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae31c7a000e3133%3A0x9815334b37f56c1c!2sWarakapola!5e0!3m2!1sen!2slk!4v1678163860053!5m2!1sen!2slk"></script>


<!-- footer -->

<?php require 'footer.php'?>

	<script type="text/javascript" src="script.js"></script>
</body>

</html>