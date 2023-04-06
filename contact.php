<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="./other styles/contact.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Safewest Hospitals</title>
</head>

<body>


	<?php include 'header.php' ?>

	<div class="contact-heading">
		<h1>Contact Us</h1>
	</div>

	<section class="contact-all">

		<div class="contact-details">
			<div>
				<h4>Number</h4>
				<p><a href="tel:+94 123 4564">+94 123 4564</a></p>
			</div>
			<div>
				<h4>Email</h4>
				<p><a href="mailto:safewest@gmail.com">safewest@gmail.com</a></p>
			</div>
			<img src="./images/contact.png" alt="conatct">
		</div>
		<div class="contact-form">
			<form>
				<label for="name">Name</label>
				<input type="text" id="name" name="name" placeholder="Your name..">

				<label for="phone">Mobile Number</label>
				<input type="text" id="phone" name="phone" placeholder="Your phone number..">

				<label for="email">Email Address</label>
				<input type="email" id="email" name="email" placeholder="Your email address..">

				<label for="note">Message</label>
				<textarea name="message" id="message"></textarea>

				<input type="submit" value="Send">
			</form>


		</div>

	</section>

	<?php require 'footer.php' ?>

	<script type="text/javascript" src="script.js"></script>
</body>

</html>