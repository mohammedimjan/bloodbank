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
		<div class="all-contents" id="all-con-form">
			<main class="main">

					<h1>Update Profile</h1>
					<form>
						<label for="name">Name</label>
						<input type="text" id="name" name="name" placeholder="Your name..">

						<label for="age">Age</label>
						<input type="text" id="age" name="age" placeholder="Your age..">

						<div class="radio-group">
							<label>Gender</label>
							<label><input type="radio" name="gender" value="male">Male</label>
							<label><input type="radio" name="gender" value="female">Female</label>
						</div>
						<label for="phone">Mobile Number</label>
						<input type="text" id="phone" name="phone" placeholder="Your phone number..">

						<label for="bloodgroup">Blood Group</label>
						<select id="bloodgroup" name="bloodgroup">
							<option value="">Select a blood group..</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>

						<label for="email">Email Address</label>
						<input type="email" id="email" name="email" placeholder="Your email address..">

						<div class="file-group">
							<label for="photo">Upload Image</label>
							<input type="file" id="photo" name="photo">
							<button type="button">Browse</button>
						</div>

						<input type="submit" value="Update">
					</form>

			</main>
		</div>
	</div>


	<?php include 'footer.php' ?>

	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>


</body>

</html>