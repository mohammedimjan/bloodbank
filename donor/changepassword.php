<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Simple Responsive Admin</title>

	<link href="assets/css/bootstrap.css" rel="stylesheet" />

	<link href="assets/css/font-awesome.css" rel="stylesheet" />

	<link href="assets/css/custom.css" rel="stylesheet" />

	<link rel="stylesheet" href="style.css" />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>



	<?php include 'header.php' ?>

	<?php include 'sidebar.php' ?>

	<div id="page-wrapper">
		<div class="all-contents">
		<main class="main">
			<div class="form-head form-head-flex">
				<h1>Change Password</h1>
				<form>
					<label for="currentpassword">Old Password</label>
					<input type="password" id="currentpassword" name="currentpassword" placeholder="Password.." required>

					<label for="newpassword">New Password</label>
					<input type="password" id="newpassword" name="newpassword" placeholder="New Password.." required>
					
					<label for="confrimpassword">Confrim Password</label>
					<input type="password" id="confrimpassword" name="confrimpassword" placeholder="Confirm Password.." required>

					<input type="submit" value="change">
				</form>
			</div>
		</main>
		</div>
	</div>


	<?php include 'footer.php' ?>

	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>


</body>

</html>