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
			<div class="form-head">
				<h2>All Requests</h2>

				<table class="table-normal">
					<tr>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Blood Group</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Note</th>
						<th>Status</th>
					</tr>
					<tr>
						<td>Alfreds</td>
						<td>21</td>
						<td>Male</td>
						<td>A+</td>
						<td>Mohammedimjan@gmail.com</td>
						<td>0727955221</td>
						<td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius modi voluptatibus accusantium vel hic harum ipsum facilis omnis minus sit.</td>
						<td>
							Approved
						</td>
					</tr>
					<tr>
						<td>Alfreds</td>
						<td>21</td>
						<td>Male</td>
						<td>A+</td>
						<td>Mohammedimjan@gmail.com</td>
						<td>0727955221</td>
						<td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius modi voluptatibus accusantium vel hic harum ipsum facilis omnis minus sit.</td>
						<td>
							Declined
						</td>
					</tr>
					<tr>
						<td>Alfreds</td>
						<td>21</td>
						<td>Male</td>
						<td>A+</td>
						<td>Mohammedimjan@gmail.com</td>
						<td>0727955221</td>
						<td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius modi voluptatibus accusantium vel hic harum ipsum facilis omnis minus sit.</td>
						<td>
							Approved
						</td>
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