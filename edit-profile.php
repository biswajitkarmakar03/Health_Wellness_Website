<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once 'link.php' ?>
	<title>Edit Profile - Fitset</title>
</head>

<body>

	<?php
	$query = mysqli_query($con, "select * from login_system where email='" . $_SESSION['user_id'] . "'");
	$row = mysqli_fetch_array($query);
	?>


	<div class="container justify-content-center my-5">
		<div class="row d-flex ">
			<div class="col-md-12 mt-4 pt-0">
				<center>
					<h2>Edit Your Profile</h2>
				</center>
				<form action="update-profile.php" method="POST" name="form">
					<input type="hidden" name="editID" value="<?php echo $row['user_id']; ?>">
					<div class="mb-3">
						<label class="form-label">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Provide Your Name"
							value="<?php echo $row['name']; ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email"
							placeholder="Provide Your Email" value="<?php echo $row['email']; ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">phone</label>
						<input type="number" class="form-control" id="phone" name="phone"
							placeholder="Provide Your phone Number" value="<?php echo $row['phone']; ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Age</label>
						<input type="text" class="form-control" id="age" name="age" placeholder="Provide Your Age"
							value="<?php echo $row['age']; ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Gender</label>
						<select class="form-control" id="gender" name="gender">
							<option value="">Select</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password"
							placeholder="Set A Password" value="<?php echo $row['password']; ?>">
					</div>

					<center>
						<button type="submit" class="btn btnRm btn-bn">Update</button>
					</center>

				</form>
			</div>
		</div>
	</div>

</body>

</html>