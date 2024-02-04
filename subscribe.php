<?php
session_start();
if($_SESSION["user_id"]==""){
    echo "nosession found";
    header("location:login.php");
    exit(1);
}
include_once "link.php";

$queryCourseLevel=mysqli_query($con,"select * from course_level where id='".$_GET['course-level-id']."'");
$rowCourseLevel=mysqli_fetch_array($queryCourseLevel);

$res=mysqli_query($con,"insert into subscription set purchase_date='".date('Y-m-d')."', user_id='".$_SESSION['user_id']."', course_level_id='".$_GET['course-level-id']."', amount='".$rowCourseLevel['amount']."'");
header("location:mainpage.php");
?>