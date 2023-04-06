<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Simple Responsive Admin</title>

	<link href="assets/css/bootstrap.css" rel="stylesheet" />

	<link href="assets/css/font-awesome.css" rel="stylesheet" />

	<link href="assets/css/custom.css" rel="stylesheet" />

	<link rel="stylesheet" href="../admin/other styles/camps.css" />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
	<?php
	include('../db.php');
	?>



	<?php include 'header.php' ?>

	<?php include 'sidebar.php' ?>

	<div id="page-wrapper">
		<h1>Camps</h1>
		<main class="main">
			<section class="camp-list">

				<?php
				$sql = "SELECT camptitle, photo, note FROM camps";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)){
						echo '<div class="camp">';
						echo '<img src="camps/' . $row["photo"] . '" alt="' . $row["camptitle"] . '">';
						echo '<h2 class="camp-name">' . $row["camptitle"] . '</h2>';
						echo '<p class="camp-description">' . $row["note"] . '</p>';
						echo '</div>';
					}
				}
				else{
					echo '<div class="camp">';
					echo '<img src="admin/assets/img/noimg.png" alt="noimg">';
					echo '<h2 class="camp-name">No Camps</h2>';
					echo '<p class="camp-description">No Description</p>';
					echo '</div>';
				}
				?>
			</section>
		</main>
	</div>

	<?php include 'footer.php' ?>

	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>


</body>

</html>