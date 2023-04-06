<?php
include('db.php');
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="./other styles/requests.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Safewest Hospitals</title>
</head>

<body>


	<?php include 'header.php' ?>

	<div class="req-form">
		<div class="head">
			<h1>Request Blood</h1>
		</div>

		<section class="req-form-all">

			<form method="post" enctype="multipart/form-data">

				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="age">Age:</label>
				<input type="number" id="age" name="age" min="0" required>
				<div class="radio-group">
					<label>Gender</label>
					<label><input type="radio" name="gender" value="male">Male</label>
					<label><input type="radio" name="gender" value="female">Female</label>
				</div>
				<label for="blood-group">Blood Group:</label>
				<select id="blood-group" name="bloodgroup">
					<?php
					$sql="SELECT * FROM bloodgroup";
					$result = mysqli_query($conn,$sql);

					if(mysqli_num_rows($result)>0){
						while($row = mysqli_fetch_assoc($result)){
							echo '<option value="' . $row["blood_group"] . '">' . $row["blood_group"] . '</option>';
						}
					} else {
						echo '<option value="">No blood groups available</option>';
					}

					?>
				</select>

				<label for="email">E-Mail:</label>
				<input type="email" id="email" name="email" required>

				<label for="phonenumber">Phone Number:</label>
				<input type="text" id="phonenumber" name="phonenumber" pattern="[+]?[0-9]{10,12}" title="Enter A Valid Number" required>

				<div class="file-group">
					<label for="letter">Upload Letter from Hospital</label>
					<input type="file" id="letter" name="hospitalreport" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx" required>
					<button type="button">Browse</button>
				</div>

				<input type="submit" value="Submit" name="send">
			</form>

			<?php
			if (isset($_POST['send'])) {
				$name = $_POST['name'];
				$age = $_POST['age'];
				$gender = $_POST['gender'];
				$bloodgroup = $_POST['bloodgroup'];
				$email = $_POST['email'];
				$phonenumber = $_POST['phonenumber'];
				$hospitalreport = $_FILES['hospitalreport']['name'];
				$tmp_name = $_FILES['hospitalreport']['tmp_name'];
				move_uploaded_file($tmp_name, "hospital_reports/$hospitalreport");

				$request_datetime = date('Y-m-d H:i:s');

				$insert_requests = "INSERT INTO requests(name,datetime,age,gender,blood_group,email,phone_number,hospital_report) VALUES('$name','$request_datetime',$age,'$gender','$bloodgroup','$email','$phonenumber','$hospitalreport')";


				$result = mysqli_query($conn, $insert_requests);

				if ($result) {
					echo "<script>alert('Requested successfully!')</script>";
					echo "<script>window.open('requests.php','_self')</script>";
				} else {
					echo "<script>alert('Something went wrong')</script>";
				}
			}
			?>

	</div>
	</section>

	<?php require 'footer.php' ?>

	<script type="text/javascript" src="script.js"></script>
</body>

</html>