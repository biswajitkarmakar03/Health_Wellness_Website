<?php
	session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'link.php' ?>
    <title>Profile - Fitset</title>
</head>
<body>

<?php include_once 'mainpage.php' ?>

<?php
        $queryloginDetails=mysqli_query($con,"select * from login_system where email='".$_SESSION['user_id']."'");
        $row=mysqli_fetch_array($queryloginDetails);
        {
?>
    <div class="container justify-content-center">
        <div class="row d-flex ">
            <div class="col-md-10 mt-5 pt-5">
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
</body>
</html>