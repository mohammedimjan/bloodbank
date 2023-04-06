<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="./other styles/login.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Safewest Hospitals</title>
</head>

<body>


	<?php include 'header.php' ?>

	<div class="log-heading">
		<h1>Donor Login</h1>
	</div>
	<section class="login-form">
		<img src="images/login.jpg" alt="login">
		<!-- <form>

			<label for="email">Email Address</label>
			<input type="email" id="email" name="email" placeholder="Your email address..">
			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Your Password">
			<input type="submit" value="Login">
		</form> -->

		<form>
			<label for="email">Email Address</label>
			<input type="email" id="email" name="email" placeholder="Your email address..">

			<label for="password">Password</label>
			<div class="password-wrapper">
				<input type="password" id="password" name="password" placeholder="Your Password">
				<i id="show-password" onclick="togglePasswordVisibility()" class="fa-solid fa-eye"></i>
			</div>

			<input type="submit" value="Login">
		</form>
	</section>

	<?php require 'footer.php' ?>

	<script>
		function togglePasswordVisibility() {
			const passwordInput = document.getElementById("password");
			const showPasswordButton = document.getElementById("show-password");

			if (passwordInput.type === "password") {
				passwordInput.type = "text";
				showPasswordButton.classList.remove("fa-eye");
				showPasswordButton.classList.add("fa-eye-slash");
			} else {
				passwordInput.type = "password";
				showPasswordButton.classList.remove("fa-eye-slash");
				showPasswordButton.classList.add("fa-eye");
			}
		}
	</script>

	<script type="text/javascript" src="script.js"></script>
</body>

</html>