<?php
include_once "connection.php";
$updateID = $_POST['editID'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$password = $_POST['password'];
if (isset($name) && isset($phone) && isset($age) && isset($gender) && isset($password)) {
	$q = "UPDATE login_system SET name='$name' , phone='$phone' , age='$age' , gender='$gender' , password='$password' WHERE user_id=$updateID";
	$res = mysqli_query($con, $q);
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=mainpage.php">';
}


?>