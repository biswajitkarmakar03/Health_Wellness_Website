<?php	
	session_start();
	if(isset($_POST['email']))
	{

	$conn= mysqli_connect("localhost", "root", "","fitset");
	$res_check=mysqli_query($conn,"SELECT * FROM login_system where email=  '".$_POST["email"]."' and password=  '".$_POST["password"]."' ");

	if($row=mysqli_fetch_array($res_check)){
        $_SESSION['user_id']=$_POST['email'];
        header("location:mainpage.php");
	}
	else{
      echo "Email or Password did not match";
	}
	}
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
        <?php include_once 'link.php' ?>
		<title>Login - Fitset</title>
		<style>
			.login{ 
				background-color:#fff; 
				width:350px; 
				height:auto; 
				border-radius:8px; 
				border:none; 
				padding:15px; 
				font-family: verdana; 
				color:#000; 
				margin:10%;
                padding-top:2%;
			}
			
            input{
				border-radius:4px;
				width:300px;
				border: 1px solid black;
				padding: 10px 15px;
				cursor: pointer;
				outline: none;
			 }
		</style>
	</head>
	<body>

    <?php include_once 'navbar.php'; ?>

	<?php
	    if (isset($_COOKIE["email"])) {
			
			setcookie("email", "<h1><center><br>Log In First <br>
			Otherwise you are not able Visit this Page</center></h1>", time() + 86400);
		    echo $_COOKIE["email"] ;
		}	
		?>
	<center>	
	<div class="login">
				<form class="form1" id="form1" action="" method="POST">
					<h1>Login</h1>
					<input type="text" class="w-100" id="email" name="email" placeholder="Email" required><br><br>
					<input type="password" class="w-100" id="password" name="password" placeholder="Password" required><br><br>
					<button type="submit" class="btn btnRm btn-bn w-100">Log in</button>
                    <br>
                    <br>
                    <p>
                        Don't have an account ? <a class="text-decoration-none" href="./register.php">Create New</a>
                    </p>
				</form>
			</div>
	</center>

        <?php include_once 'footer.php' ?>

	</body>
	</html>
	