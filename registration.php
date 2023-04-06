<?php
include('db.php');
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="./other styles/registartion.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Safewest Hospitals</title>
</head>

<body>


	<?php include 'header.php' ?>

	<div class="head">
		<h1>Donor Registration</h1>
	</div>

	<section class="d-register">
		<form method="post" enctype="multipart/form-data">
			<label for="name">Donor Name</label>
			<input type="text" id="name" name="donorname" pattern="[a-zA-Z _]{3,40}" title="Enter A Valid Name" required placeholder="Your name..">

			<label for="age">Age</label>
			<input type="text" id="age" required name="age" placeholder="Your age..">

			<div class="radio-group">
				<label>Gender</label>
				<label><input type="radio" name="gender" value="male" required>Male</label>
				<label><input type="radio" name="gender" value="female">Female</label>
			</div>
			<label for="phone">Mobile Number</label>
			<input type="text" id="phone" name="phone" pattern="[+]?[0-9]{10,12}" title="Enter A Valid Number" placeholder="Your phone number..">

			<label for="bloodgroup">Blood Group</label>
			<select id="bloodgroup" name="bloodgroup" required>
				<option disabled>Select a blood group..</option>
				<?php


				$sql = "SELECT * FROM bloodgroup";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo '<option value="' . $row["blood_group"] . '">' . $row["blood_group"] . '</option>';
					}
				} else {
					echo '<option value="">No blood groups available</option>';
				}
				?>
			</select>

			</select>

			<label for="email" required>Email Address</label>
			<input type="email" id="email" name="email" placeholder="Your email address..">

			<label for="password">Password</label>
			<input type="password" id="password" name="password" pattern="^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9]).{8,}$" title="8-Character Minimum with Uppercase Letter, Symbol, and Number" required placeholder="Your password..">

			<label for="confirm-password">Confirm Password</label>
			<input type="password" id="confirm-password" name="confirmpassword" required placeholder="Confirm your password..">

			<div class="file-group">
				<label for="photo">Upload Image</label>
				<input type="file" id="myFile" name="photo" accept="image/*" maxlength="15000000">
				<button type="button">Browse</button>
			</div>

			<input type="submit" value="Register" name="register">
		</form>
		<?php
		if (isset($_POST['register'])) {

			$name = $_POST['donorname'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];
			$phone = $_POST['phone'];
			$bloodgroup = $_POST['bloodgroup'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirmpassword = $_POST['confirmpassword'];
			$donorimage = $_FILES['photo']['name'];
			$temp_name = $_FILES['photo']['tmp_name'];
			move_uploaded_file($temp_name, "donor_images/$donorimage");



			// Password validation

			if ($password !== $confirmpassword) {
				echo "<script>alert('Passwords do not match. Please try again.')</script>";
			} else {
				$hashed_password = password_hash($password, PASSWORD_DEFAULT);
				$Conf_hashed_password = password_hash($confirmpassword, PASSWORD_DEFAULT);

				$insert_donor = "INSERT INTO donors (name, age, gender, mobile_no, blood_group, email_add, password, conf_password, donor_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
				$stmt = $conn->prepare($insert_donor);
				$stmt->bind_param("sisssssss", $name, $age, $gender, $phone, $bloodgroup, $email, $hashed_password, $Conf_hashed_password, $donorimage);
				$stmt->execute();

				if (mysqli_stmt_affected_rows($stmt) > 0) {
					echo "<script>alert('Donor Has been registered successfully!')</script>";
					echo "<script>window.open('login.php','_self')</script>";
				} else {
					echo "<script>alert('Something went wrong')</script>";
				}
			}
		}
		?>
	</section>


	<?php require 'footer.php' ?>

	<script type="text/javascript" src="script.js"></script>
</body>

</html>