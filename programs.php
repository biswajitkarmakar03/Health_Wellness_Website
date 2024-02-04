<!DOCTYPE html>
<html lang="en">
<head>

    <?php include_once 'link.php'; ?>
    <title>Programs - Fitset</title>

</head>

<body onload="activeMenu('3')">

<?php include_once 'navbar.php'; ?>

<div class="container-fluid p-0 " style="background:black; color:white;">
	<div class="container py-5">
		<h1 class="theme-light fw-bold">
			Programs
		</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb m-0">
				<li class="breadcrumb-item">
					<a href="./index.php" style="text-decoration:none; color:#979797;">
		    			Home
					</a>
				</li>
				<li class="breadcrumb-item active theme-light" aria-current="page">Programs</li>
			</ol>
		</nav>
	</div>
</div>      


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="h1  fw-bold text-uppercase mt-5"><span class="subHeading">Most Popular Programs</span></h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nulla quae autem quod eius natus nesciunt repellat odio maiores distinctio voluptatibus modi, omnis sint non impedit at. Voluptatibus, eos impedit!
      </p>
    </div>
  </div>
</div>

<?php
    $queryCourse=mysqli_query($con,"select * from course");
    while($rowCourse=mysqli_fetch_array($queryCourse))
    {
?>
      <div class="container mt-3 mb-5 p-4">
        <div class="row programCard" >
          <div class="col-md-4">
            <img style="width:100%; height:auto;" src="./Images/<?php echo $rowCourse["image"]; ?>" alt="Yoga Image"/>
          </div>
          <div class="col-md-8">
                <strong><?php echo $rowCourse["course_name"]; ?></strong>
                <p> 
                <?php echo $rowCourse["course_desc"]; ?>
                </p>
                <div class="col-4 buttons ">
                  <div class="row">
                    <div class="col">
                      <a class="btn btnRm w-100 my-2" href="./program-levels.php?id=<?php echo $rowCourse['id']; ?>">Know more</a>
                    </div>
                  </div>
                </div> 
          </div>
        </div>
      </div>
<?php
    }
?>
<?php include_once 'footer.php'; ?>

</body>
</html>