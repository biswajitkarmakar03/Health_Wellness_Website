<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'link.php'; ?>
    <title>Contact - Fitset</title>
</head>
<body onload="activeMenu('5')">

<?php include_once 'navbar.php'; ?>

<div class="container-fluid p-0 " style="background:black; color:white;">
	<div class="container py-5">
		<h1 class="theme-light fw-bold">
			Contact Us
		</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb m-0">
				<li class="breadcrumb-item">
					<a href="./index.php" style="text-decoration:none; color:#979797;">
		    			Home
					</a>
				</li>
				<li class="breadcrumb-item active theme-light" aria-current="page">Contact Us</li>
			</ol>
		</nav>
	</div>
</div>
		
		<div class="container my-5 py-5">
			<div class="col-md-12 py-4">
				<div class="row">
					<div class="col-md-6 my-auto contact-details">
						<div class="col-md-12 bg-blue rounded shadow-sm p-5 text-light" style="background:black; color:white;">
							<h2 class="text-light fw-bold">
								Contact Details
							</h2>
							<div class="row py-4" data-aos="fade-up">
								<div class="col-md-2 my-auto">
									<center>
										<i class="fa-solid fa-location-dot bigHeading1"></i>
									</center>
								</div>
								<div class="col-md-10 my-auto">
									<h3>
										Address:
									</h3>
									<p class="m-0 text-muted">
										Baburbag,Burdwan,713104.
									</p>
								</div>
							</div>
							<div class="row py-4" data-aos="fade-up">
								<div class="col-md-2 my-auto">
									<center>
										<i class="fa-solid fa-envelope bigHeading1"></i>
									</center>
								</div>
								<div class="col-md-10 my-auto">
									<h3>
										Email:
									</h3>
									<p>
										<a class="text-decoration-none theme-light text-muted" href="mailto:info@fitset.com"> info@fitset.com</a>
									</p>
								</div>
							</div>
							<div class="row py-4" data-aos="fade-up">
								<div class="col-md-2 my-auto">
									<center>
										<i class="fa-solid fa-phone bigHeading1"></i>
									</center>
								</div>
								<div class="col-md-10 my-auto mob-contact">
									<h3>
										Mobile No:
									</h3>
									<p>
										<a class="text-decoration-none theme-light text-muted" href="tel:+91 7679652990">+91 7679652990</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 my-auto">
						<center>
							<h2 class="theme-blue fw-bold">
								Drop Your Message
							</h2>
							<p class="text-center">
								We will respond to your inquiry as quickly as possible
							</p>
						</center>
						<form id="userForm" name="userForm" method="post" enctype="multipart/form-data" class="was-validated" action="#">
							<div class="form-floating mb-4">
								<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name" autocomplete="off" required>
								<label>Name</label>
							</div>
							<div class="form-floating mb-4">
								<input type="text" class="form-control" id="user_mobile" name="user_mobile" placeholder="Mobile No" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
								<label>Mobile No</label>
							</div>
							<div class="form-floating mb-4">
								<input type="text" class="form-control" id="user_email" name="user_email" placeholder="E-mail" autocomplete="off" required>
								<label>E-mail</label>
							</div>
							<div class="form-floating mb-4">
								<textarea class="form-control h-25" id="user_message" name="user_message" placeholder="Message" autocomplete="off" required></textarea>
								<label>Message</label>
							</div>
							<center>
								<button type="button" class="btn btnRm rounded w-100 py-3" onclick="sendUserDetails()">Submit</button>
							<center>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php include_once 'footer.php'; ?> 
        
</body>
</html>