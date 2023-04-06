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
			<div class="form-head form-head-flex">
				<h2>All Donors</h2>

				<?php
				// Check if the form was submitted
				if (isset($_POST['delete'])) {
					// Get the ID of the donor to delete
					$id = $_POST['id'];

					// Create a SQL query to delete the donor from the database
					$sql = "DELETE FROM donors WHERE id = $id";

					// Execute the query
					if (mysqli_query($conn, $sql)) {

						echo "<script>alert('Donor Has been Deleted successfully!')</script>";
						header("Location: viewdonors.php");
						exit();
					} else {
						// If there was an error, display an error message
						echo "Error deleting record: " . mysqli_error($conn);
					}
				}
				?>

				<table class="table-normal">
					<tr>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Blood Group</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Actions</th>
					</tr>

					<?php
					$sql = "SELECT * FROM donors";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "
            					<tr>
                					<td>{$row['name']}</td>
                					<td>{$row['age']}</td>
                					<td>{$row['gender']}</td>
                					<td>{$row['blood_group']}</td>
                					<td>{$row['email_add']}</td>
                					<td>{$row['mobile_no']}</td>
                					<td>
                    					<form method='post' action='{$_SERVER["PHP_SELF"]}' id='delete-btn-form'>
                        					<input type='hidden' name='id' value='{$row["id"]}'>
                        					<button type='submit' name='delete' class='decline-button'>Delete Account</button>
                    					</form>
                					</td>
            					</tr>";
						}
					}
					?>
				</table>
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