<!DOCTYPE html>
<html>
<head>
	<?php include_once './link.php'; ?>
	<title>Programs - Fitset</title>
</head>
<body>


<?php include_once './navbar.php'; ?>
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
      <h1 class="h1  fw-bold text-uppercase mt-5"><span class="subHeading">Programs | Beginner - Advanced</span></h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nulla quae autem quod eius natus nesciunt repellat odio maiores distinctio voluptatibus modi, omnis sint non impedit at. Voluptatibus, eos impedit!
      </p>
    </div>
    <?php
        $queryCourseLevel=mysqli_query($con,"select * from course_level where course_id='".$_GET['id']."'");
        while($rowCourseLevel=mysqli_fetch_array($queryCourseLevel))
        {
    ?>
            <div class="col-md-4">
                <div class="cardItems rounded mb-5">
                    <img style="width:100%; height:auto;" src="./Images/<?php echo $rowCourseLevel["image"]; ?>" alt="Yoga Image"/>
                
                    <strong class="fs-4 ps-1"><?php echo $rowCourseLevel["level_name"]; ?></strong>
                    <p class="text-secondary mt-1"> 
                       <?php echo $rowCourseLevel["level_desc"]; ?>
                    </p>

                    <div class="fs-2 font-weight-bold text-center text-dark ">  
                      Rs.<?php echo $rowCourseLevel["amount"]; ?>/- 
                    </div>
                    <div class="fs-6 text-center text-dark font-weight-bold">
                      <?php echo $rowCourseLevel["course_duration"]; ?>
                    </div>
                    
                    <div class="col">
                        <a class="btn btnRm w-100 my-2" href="./subscribe.php?course-level-id=<?php echo $rowCourseLevel['id'];?>">Buy Now</a>
                    </div>
                </div>
            </div>
    <?php
        }
        ?>
  </div>
</div>



<!-- = = = = Bootstrap JavaScript = = = = -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- = = = = Jquery = = = = -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- = = = = Owl Carousel JavaScript = = = = -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php include_once './footer.php'; ?>
		
</body>
</html>