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

	<style>

	</style>

	<?php include 'header.php' ?>

	<?php include 'sidebar.php' ?>

	<div id="page-wrapper" class="profile">
		<div class="all-contents">
			<h1>Profile</h1>
			<img src="../donor/assets/img/noimg.png" alt="Profile Image">
			<table>
				<tr>
					<th>Name:</th>
					<td>John Doe</td>
				</tr>
				<tr>
					<th>Phone Number:</th>
					<td>555-1234</td>
				</tr>
				<tr>
					<th>Age:</th>
					<td>30</td>
				</tr>
				<tr>
					<th>Gender:</th>
					<td>Male</td>
				</tr>
				<tr>
					<th>Bloodgroup:</th>
					<td>A+</td>
				</tr>
				<tr>
					<th>Email:</th>
					<td>m@gmail.com</td>
				</tr>
			</table>
			<a href="changepassword.php"><button class="btn-change-password">Change Password</button></a>
		</div>
	</div>


	<?php include 'footer.php' ?>

	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>


</body>

</html>