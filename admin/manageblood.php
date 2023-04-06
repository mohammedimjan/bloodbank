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
				<h2>Add Blood From Donors</h2>
				<form>
					<label for="selectdonor">Select Donor</label>
					<select id="selectdonor" name="Donor">
						<option disabled>Select Donor</option>
					</select>
					<label for="selectcamp">Select Camp</label>
					<select id="selectcamp" name="selectcamp">
						<option value="notincamps">Not In Camps</option>

						<?PHP
						$sql = "SELECT * FROM camps";
						$result = mysqli_query($conn,$sql);

						if(mysqli_num_rows($result)>0){
							while($row= mysqli_fetch_assoc($result)){
								echo '<option value="' . $row["camptitle"] . '">' . $row["camptitle"] . '</option>';
							}
						} else {
							echo '<option value="">No Camps available</option>';
						}
						?>
					</select>
					<label for="addblood">Add Blood Units</label>
					<input type="number" id="addblood" name="addblood" placeholder="Add Blood Units">
					<input type="submit" value="Add Blood">
				</form>
			</div>
		</main>
		<main class="main">
			<div class="form-head">
				<h2>Add Blood</h2>
				<form>
					<label for="selctblood">Select Blood</label>
					<select id="selctblood" name="Select Blood">
						<option value="selctblood">Select Blood</option>
					</select>
					<label for="addblood">Add Blood Units</label>
					<input type="number" id="addblood" name="addblood" placeholder="Add Blood Units" min="1" >
					<input type="submit" value="Add Blood">
				</form>
			</div>
		</main>

		<main class="main">
			<div class="form-head">
				<h2>Remove Blood</h2>
				<form>
					<label for="selctblood">Select Blood</label>
					<select id="selctblood" name="Select Blood">
						<option value="selctblood">Select Blood</option>
					</select>
					<label for="addblood">Remove Blood Units</label>
					<input type="number" id="addblood" name="addblood" placeholder="Remove Blood Units"  max="0">
					<input type="submit" value="Upate Blood">
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