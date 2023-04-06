<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="other styles/login.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Safewest Hospitals</title>
</head>

<body>

	<?php include 'header.php' ?>


	<div class="log-heading">
		<h1>Admin Login</h1>
	</div>
	<section class="login-form">
		<img src="../admin/assets/img/login.jpg" alt="login">
		<form>
			<label for="adminemail">Email Address</label>
			<input type="email" id="adminemail" name="adminemail" placeholder="Your email address..">
			<label for="adminpassword">Password</label>
			<input type="password" id="adminpassword" name="adminpassword" placeholder="Your Password">
			<input type="submit" value="Login">
		</form>
	</section>


	<?php include 'footer.php' ?>

</body>

</html>