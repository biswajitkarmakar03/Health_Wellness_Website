<?php
session_start();
if($_SESSION["user_id"]==""){
    echo "nosession found";
    header("location:index.php");
    exit(1);
}
?>

<!DOCTYPE html>
<html>
<head>
    <?php include_once 'link.php'?>
    <title>Profile - Fitset</title>
</head>
<body class="bg-dark">
    
    <div class="container fluid">
        <div class="row flex-nowrap">
            <div class="bg-dark col-auto col-md-4 col-lg-3 min-vh-100 d-flex flex-column justify-content-between profileCard">
                <div class="bg-dark p-2">
                    <a class="d-flex text-decoration-none mt-1 align-item-center text-white">
                        <span class="fs-5 d-none d-sm-inline">Hey, &nbsp;<?php echo $_SESSION["user_id"];?></span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white active">
                                <i class="fs-6 fa fa-user"></i><span class="fs-6 ms-2 d-none d-sm-inline">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="dashboard.php" class="nav-link text-white">
                                <i class="fs-6 fa-solid fa-gauge"></i><span class="fs-6 ms-2 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="./programs.php" class="nav-link text-white">
                            <i class="fs-6 fa-solid fa-list-check"></i><span class="fs-6 ms-2 d-none d-sm-inline">Programs</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="./logout.php" class="nav-link text-white">
                                <i class="fs-6 fa-sharp fa-solid fa-right-from-bracket"></i><span class="fs-6 ms-2 d-none d-sm-inline">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            
            <div class="col-md-8 p-3 bg-secondary bg-gradient profileCard" id="profile-section">
                <?php
						$queryloginDetails=mysqli_query($con,"select * from login_system where email='".$_SESSION['user_id']."'");
						$row=mysqli_fetch_array($queryloginDetails);
						{
				?>
					<div class="container justify-content-center">
						<div class="row d-flex ">
							<div class="col-md-12 mt-5 pt-5">
								<div class="row z-depth-3">
									<div class="col-sm-4 bg-primary bg-gradient rounded-left text-center">
										<div class="card-block text-cemter text-white">
											<i class="fa-solid fa-circle-user fa-8x mt-5"></i>
											<h2 CLass="font-weight-bold mt-4"><?php echo $row["name"]; ?></h2>
											<i class="far fa-edit  mb-4"></i> <span><a class="text-decoration-none text-light" href="edit-profile.php?id=<?php echo $row['user_id']; ?>">Edit</a></span>
										</div>
									</div>
									<div class="col-sm-8 bg-white rounded-right">
										<div class="fs-5 mt-3 text-center font-weight-bold">Profile Information</div>
										<hr class="badge-primary mt-0 w-100">
											<div class="row">
												<div class="col-sm-6 mt-2">
													<p class="font-weight-bold"> <i class="fa-solid fa-user"></i> Name</p>
													<h6 class="text-muted"><?php echo $row["name"]; ?></h6>
												</div>
												
												<div class="col-sm-6 mt-2">
													<p class="font-weight-bold"><i class="fa-solid fa-phone"></i> Phone</p>
													<h6 class="text-muted"><?php echo $row["phone"]; ?></h6>
												</div>

												<div class="col-sm-6 mt-2">
													<p class="font-weight-bold"><i class="fa-solid fa-envelope"></i> Email</p>
													<h6 class="text-muted"><?php echo $row["email"]; ?></h6>
												</div>
												
												<div class="col-sm-6 mt-2">
													<p class="font-weight-bold"><i class="fa-solid fa-chart-line"></i> Age</p>
													<h6 class="text-muted"><?php echo $row["age"]; ?></h6>
												</div>
												
												<div class="col-sm-6 mt-2">
													<p class="font-weight-bold"><i class="fa-solid fa-venus-mars"></i> Gender</p>
													<h6 class="text-muted"><?php echo $row["gender"]; ?></h6>
												</div>
												
												<div class="col-sm-6 mt-2">
													<p class="font-weight-bold"><i class="fa-solid fa-key"></i>  Password</p>
													<h6 class="text-muted"><?php echo $row["password"]; ?></h6>
												</div>
											</div>
										<hr class="badge-primary mt-3 mb-5 w-100">
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php    
					}
				?>    
            </div> 
        </div>
    </div>


<!-- = = = = Bootstrap JavaScript = = = = -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- = = = = Jquery = = = = -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>