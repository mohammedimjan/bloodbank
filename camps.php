<?php
include('db.php');
?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="./other styles/camps.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Safewest Hospitals</title>
</head>

<body>


	<?php include 'header.php' ?>

	<h1 class="head-camp">camps</h1>

	<main class="main">
			<section class="camp-list">
			<?php
				$sql = "SELECT camptitle, photo, note FROM camps";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)){
						echo '<div class="camp">';
						echo '<img src="./admin/camps/' . $row["photo"] . '" alt="' . $row["camptitle"] . '">';
						echo '<h2 class="camp-name">' . $row["camptitle"] . '</h2>';
						echo '<p class="camp-description">' . $row["note"] . '</p>';
						echo '</div>';
					}
				}
				else{
					echo '<div class="camp">';
					echo '<img src="./admin/assets/img/noimg.png" alt="noimg">';
					echo '<h2 class="camp-name">No Camps</h2>';
					echo '<p class="camp-description">No Description</p>';
					echo '</div>';
				}
				?>
			</section>
		</main>

	<?php require 'footer.php' ?>

	<script type="text/javascript" src="script.js"></script>
</body>

</html>