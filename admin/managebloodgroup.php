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
				<h2>Add Blood Group</h2>
				<form method="post" enctype="multipart/form-data">
					<label for="bloodgroup">Blood Group</label>
					<input type="text" id="bloodgroup" name="bloodgroup" placeholder="Blood Group" required pattern=".{1,}" title="Feild cannot be empty!">
					<input type="submit" value="Save" name="save">
				</form>

				<?php
				if(isset($_POST['save'])){
					$bloodgroup = $_POST['bloodgroup'];

					$checkbloodgroup = "SELECT blood_group FROM bloodgroup WHERE blood_group = '$bloodgroup'";
					$result = mysqli_query($conn, $checkbloodgroup);

					if(mysqli_num_rows($result)>0){
						echo "<script>alert('Blood Group already added')</script>";
					} else {
						$insertbloodgroup = "INSERT INTO bloodgroup(blood_group) VALUES('$bloodgroup')";
						$results = mysqli_query($conn, $insertbloodgroup);

						if($results){
							echo "<script>alert('Blood Group added successfully!')</script>";
							echo "<script>window.open('managebloodgroup.php','_self')</script>";
						}else{
							echo "<script>alert('Something Went Worng')</script>";
						}
					}
				}
				?>
			</div>
		</main>

		<main class="main">
			<div class="form-head">
				<h2>Update Blood Group</h2>
				<form>
					<div class="ext-btn">
						<label for="selectbloodgroup">Select Blood Group</label>
						<select id="selectbloodgroup" name="selectbloodgroup">
							<option value="bloodgroup">Select Blood Group</option>
						</select>
						<input type="submit" value="Show">
					</div>
					<label for="bloodgroup">Blood Group</label>
					<input type="text" id="bloodgroup" name="bloodgroup" placeholder="Blood Group">

					<input type="submit" value="Update">
				</form>
			</div>
		</main>

		<main class="main">
			<div class="form-head">
				<h2>Delete Blood Group</h2>
				<form>
					<label for="selectbloodgroup">Select Blood Group</label>
					<select id="selectbloodgroup" name="selectbloodgroup">
						<option value="">Select Blood Group</option>
					</select>
					<input type="submit" value="Delete">
				</form>
			</div>
		</main>
	</div>


	<?php include 'footer.php' ?>

	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>


</body>

</html>