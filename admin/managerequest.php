<?php
include('../db.php');
?>

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
				<h2>Manage Requests</h2>

				<table class="table-normal req-table">
					<tr>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Blood Group</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Letter</th>
						<th>Actions</th>
					</tr>

					<?php
					$sql = "SELECT * FROM requests";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<tr>
           	 						<td>{$row['name']}</td>
            						<td>{$row['age']}</td>
            						<td>{$row['gender']}</td>
            						<td>{$row['blood_group']}</td>
            						<td>{$row['email']}</td>
            						<td>{$row['phone_number']}</td>
									<td>{$row['hospital_report']} <a href='../hospital_reports/{$row['hospital_report']}' target='_blank' d class='letter-btn'>Download</a></td>
            						<td>
              						<button class='accept-button'>Accept</button>
              						<button class='decline-button'>Decline</button>
            						</td>
          						</tr>";
						}
					}
					?>
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