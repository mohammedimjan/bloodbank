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
		<main class="main">
			<div class="adduser-form form-head">
				<h2>Add User</h2>
				<form>
					<label for="username">Username</label>
					<input type="text" id="username" name="username" placeholder="Username">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" placeholder="Password">
					<label for="password">Confirm Password</label>
					<input type="password" id="confirm-password" name="confirm-password" placeholder="Password">
					<label for="typeofuser">User Type</label>
					<select id="typeofuser" name="typeofuser">
						<option value="">Select User</option>
						<option value="admin">Admin</option>
						<option value="genral">Genral</option>
					</select>
					<input type="submit" value="Save">
				</form>
			</div>
		</main>

		<main class="main">

			<div class="deleteuser-form form-head">
				<h2>Update User</h2>
				<form>
					<div class="ext-btn">
						<select id="selectusername" name="selectusername">
							<option value="">Select Username</option>
						</select>
						<input type="submit" value="Show">
					</div>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" placeholder="Password">
					<label for="password">Confirm Password</label>
					<input type="password" id="confirm-password" name="confirm-password" placeholder="Password">
					<label for="typeofuser">User Type</label>
					<select id="typeofuser" name="typeofuser">
						<option value="">Select User</option>
						<option value="admin">Admin</option>
						<option value="genral">Genral</option>
					</select>
					<input type="submit" value="Update">
				</form>
			</div>
		</main>
		<main class="main">

			<div class="form-head">
				<h2>Delete User</h2>
				<form>
					<label for="selectusername">Select Username</label>
					<select id="selectusername" name="selectusername">
						<option value="">Select User</option>
					</select>
					<input type="submit" value="Delete">
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