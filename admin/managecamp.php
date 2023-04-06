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
			<div class="adduser-form form-head">
				<h2>Add Camp</h2>
				<form method="post" enctype="multipart/form-data">
					<label for="camptitle">Camp Title</label>
					<input type="text" id="camptitle" name="camptitle" placeholder="Camp Title" maxlength="15" minlength="5" required>
					<label for="organizedby">Organized By</label>
					<input type="text" id="organizedby" name="organizedby" placeholder="organizedby">
					<div class="file-group">
						<label for="photo">Upload Image</label>
						<input type="file" id="photo" name="photo" required>
						<button type="button">Browse</button>
					</div>
					<label for="note">Note:</label>
					<textarea id="note" name="note" maxlength="180" minlength="100" required></textarea>

					<input type="submit" value="AddCamp" name="addcamp">
				</form>

				<?php
				if (isset($_POST['addcamp'])) {
					$camptitle = $_POST['camptitle'];
					$organizedby = $_POST['organizedby'];
					$photo = $_FILES['photo']['name'];
					$tmpname = $_FILES['photo']['tmp_name'];
					$note = $_POST['note'];
					move_uploaded_file($tmpname, "camps/$photo");


					$insertcamps = "INSERT INTO camps(camptitle, organizedby, photo, note) VALUES('$camptitle','$organizedby','$photo','$note')";
					$result = mysqli_query($conn, $insertcamps);

					if ($result) {
						echo "<script>alert('Camp added successfully!')</script>";
						echo "<script>window.open('managecamp.php','_self')</script>";
					} else {
						echo "<script>alert('Something went wrong!')</script>";
					}
				}
				?>

			</div>
		</main>

		<main class="main">
			<div class="adduser-form form-head">
				<h2>Update Camp</h2>
				<form method="post" enctype="multipart/form-data">
					<label for="selectcamp">Select Camp</label>
					<select id="selectcamp" name="selectcamp">
						<option value="" selected disabled>Select Camp</option>
						<?PHP
						$sql = "SELECT * FROM camps";
						$result = mysqli_query($conn,$sql);

						while($data = mysqli_fetch_array($result)){
							if(isset($_POST['show'])&& $data[0]==$_POST['selectcamp']){
								echo "<option value=$data[0] >$data[1]</option>";
							} else{
								echo "<option value=$data[0]>$data[1]</option>";
							}
						}
						?>
					</select>
					<input type="submit" value="Show" name="show">

					<?php
					if(isset($_POST["show"])){
						$sql = "SELECT * FROM camps WHERE id='".$_POST["selectcamp"]."'";
						$result = mysqli_query($conn,$sql);
						$row = mysqli_num_rows($result);

						$data = mysqli_fetch_array($result);
						$camp_id = $data[0];
						$camptitle = $data[1];
						$organizedby = $data[2];
						$photo = $data[3];
						$note = $data[4];

					}
					?>

					<label for="camptitle" >Camp Title</label>
					<input type="text" id="camptitle" name="camptitle" value="<?php if(isset($_POST['show'])){echo $camptitle;}?>" placeholder="Camp Title" >
					<label for="organizedby">Organized By</label>
					<input type="text" id="organizedby" name="organizedby" placeholder="organizedby" value="<?php if(isset($_POST['show'])){echo $organizedby;}?>" >
					
					
					<?php
					if(isset($_POST['show'])){
						echo '<img class="campimg" src="camps/' . $data[3] . '" alt="' . $data[1] . '">';
					}
					else{
						echo '<img src="../admin/assets/img/noimg.png" alt="noimg">';
					}
					?>
					
					<div class="file-group">
						<label for="photo">Upload Image</label>
						<input type="file" id="photo" name="photo" >
						<button type="button">Browse</button>
					</div>
					<label for="note">Note:</label>
					<textarea id="note" name="note"><?php if(isset($_POST['show'])){echo $note;}?></textarea>

					<input type="submit" value="Update Camp">
				</form>
			</div>
		</main>

		<main class="main">
			<div class="form-head">
				<h2>Delete Camp</h2>
				<form method="post" enctype="multipart/form-data" action="{$_SERVER['PHP_SELF']}">
					<label for="selectcamp">Select Camp</label>
					<select id="selectcamp" name="selectcamp">
						<option value="">Select Camp</option>
					</select>
					<input type="submit" value="Delete" name="delete">
				</form>
				<!-- <?php
				// if(isset($_POST['delete'])){
				// 	$id = $_POST['id']
				// }
				?> -->
			</div>
		</main>
	</div>


	<?php include 'footer.php' ?>

	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>


</body>

</html>