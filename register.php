<?php session_start(); ?>
<html lang="en">
<head>
    <?php include_once 'link.php' ?>
	<title>Register - Fitset</title>
	<style>
		.register{
				background-color:#fff;
				width:400px;
				height:auto;
				border-radius:8px;
				padding:10px;
				font-family: verdana;
				color: #000;
				margin-left:35%;
				margin-top:5%;
                margin-bottom:5%;
			}
			input, select, option{
				border-radius:3px;
				width:300px;
                border: 1px solid #000;
				padding: 10px 15px;
				cursor: pointer;
				outline: none;
                margin: 5px 0px;
			 }
	</style>		
</head>
<body>

<?php include_once 'navbar.php'; ?>

<div class="register">
				<form class="form2" id="form2" action="" method="post">
					<h1 class="text-center">Register</h1>
					<input class="w-100" type="text" id="name" name="name" placeholder="Full Name" required><br><br>
					<input  class="w-100" type="number" id="age" name="age" placeholder="Age" required><br><br>
                    <select class="w-100" name="gender" id="gender">
                        <option value ="">Gender</option>
                        <option value ="male">Male</option>
                        <option value ="female">Female</option>
                        <option value ="others">Others</option>
                    </select>
                    <br><br>
					<input class="w-100" type="email" id="email" name="email" placeholder=" Email" required><br><br>
					<input class="w-100" type="number" id="phone" name="phone" placeholder="Mobile Number" required><br><br>
					<input class="w-100" type="password" id="password" name="password" placeholder="Password" required><br><br>
					<button type="submit" class="btn btnRm w-100" name="register">Register</button>
                    <br>
                    <br>
                    <p class="text-center">
                        Already have an account ? <a class="text-decoration-none" href="./login.php">Login</a>
                    </p>
				</form>
			</div>

            <?php include_once 'footer.php' ?>
</body>
</html>

<?php
	if(isset($_POST['email']))
	{
	 	$conn= mysqli_connect("localhost", "root", "","fitset");
	 	$res_check=mysqli_query($conn,"SELECT * FROM login_system where email=  '".$_POST["email"]."' ");
		 
	 		if($row=mysqli_fetch_array($res_check))
			{
	 			echo "Your Email alredy exist";
	 		}
	 		else	
			{
	 			$q="insert into login_system set 	name= '".$_POST["name"]."',
				 										age= '".$_POST["age"]."', 
				 										gender= '".$_POST["gender"]."', 
	 			 										email= '".$_POST["email"]."', 
	 													phone='".$_POST["phone"]."',
               											password='".$_POST["password"]."'";
                                            
				$res=mysqli_query($con,$q);
				 $_SESSION['user_id']=$_POST['email'];
				header("location:index.php");
			}	
	}
?> 

