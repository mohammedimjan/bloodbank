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
			<div class="form-head form-head-flex">
				<h2>All Donations</h2>

				<table class="table-normal">
					<tr>
						<th>Donor Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Blood Group</th>
						<th>Camp Name</th>
						<th>Date</th>
						<th>Email</th>
						<th>Phone Number</th>
					</tr>

				</table>
			</div>
		</main>
	</div>


	<?php include 'footer.php' ?>

	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>


</body>

</html>