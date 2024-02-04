<!DOCTYPE html>
<html>
<head>
	<?php include_once './link.php'; ?>
	<title>Home - Fitset</title>
</head>
<body>


<?php include_once './navbar.php'; ?>


<div class="secFirst">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <strong class=" text-light">CARE MIND AND SPIRIT</strong>   
				<div>
					<button class="btn btnRm btnjoin"><a class="text-decoration-none text-light" href="./register.php">Join Now</a></button>
				</div>        
            </div>
        </div>
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

<?php
    $queryCourse=mysqli_query($con,"select * from course");
    while($rowCourse=mysqli_fetch_array($queryCourse))
    {
?>

	<div class="col-md-4">
		<div class="cardItems rounded mb-5">
			<img style="width:100%; height:auto;" src="./Images/<?php echo $rowCourse["image"]; ?>" alt="Yoga Image"/>
		
			<strong class="fs-3 ps-1"><?php echo $rowCourse["course_name"]; ?></strong>
			<p class="text-secondary mt-1"> 
				<?php echo $rowCourse["course_desc"]; ?>
			</p>
			
			<div class="col">
				<a class="btn btnRm w-100 my-2" href="./programs.php">Know more</a>
			</div>
        </div>
    </div>
<?php
	}
?>
  </div>
</div>


<div class="container mt-3 p-5">
  <div class="row" >
    <div class="col-md-8 pt-5 text-end">
          <strong>Our Vision</strong>
          <p> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nemo, inventore repellat dolorem et, alias nesciunt ea voluptates mollitia ducimus temporibus adipisci reprehenderit odit neque excepturi quasi dolore laudantium quibusdam?
          </p>
    </div>
    <div class="col-md-4">
      <img style="width:100%; height:auto;" src="./Images/our-vision.webp" alt="our-vision image"/>
    </div>
  </div>
</div>

<div class="container mt-3 p-5">
  <div class="row" >
    <div class="col-md-4">
      <img style="width:100%; height:auto;" src="./Images/about-our-products.webp" alt="about-our-products.webp"/>
    </div>
    <div class="col-md-8 pt-5">
          <strong>Our Mission</strong>
          <p> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nemo, inventore repellat dolorem et, alias nesciunt ea voluptates mollitia ducimus temporibus adipisci reprehenderit odit neque excepturi quasi dolore laudantium quibusdam?
          </p>
    </div>
  </div>
</div>

<div class="container mt-3 p-5">
  <div class="row" >
    <div class="col-md-8 pt-5 text-end">
          <strong>Our Vision</strong>
          <p> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nemo, inventore repellat dolorem et, alias nesciunt ea voluptates mollitia ducimus temporibus adipisci reprehenderit odit neque excepturi quasi dolore laudantium quibusdam?
          </p>
    </div>
    <div class="col-md-4">
      <img style="width:100%; height:auto;" src="./Images/about-our-services.webp" alt="about-our-services.webp"/>
    </div>
  </div>
</div>


<div class="container">
    <div class="row ">
		<div class="col-md-12">
			<h1 class="h1  fw-bold text-uppercase mt-5"><span class="subHeading">premium plans</span></h1>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nulla quae autem quod eius natus nesciunt repellat odio maiores distinctio voluptatibus modi, omnis sint non impedit at. Voluptatibus, eos impedit!
			</p>
		</div>
		<div class="col-md-4 text-center cardDivplan">
				<div class="cardItems rounded">
					<img class="" style="width:50%; " src="./Images/UIOcsIe8TMVx6Rp7Wbx9ig5kw6X2g2rSxKUNsPNQ.png" alt="Silver">
					<div class="cardHeading text-center">
						SILVER
					</div>
					<div class="cardContent">
						<ul class="text-capitalize">
							<li>Bignner level</li>
							<li>3 months</li>
							<li>0 mentorship</li>
						</ul>
					</div>
					<div class="text-center">
						<strong>Rs. 2999/-</strong>
						<h6>3 Months</h6>
					</div>
					<div class="read-more text-center pb-2">
						<a class="text-decoration-none" href="./premium-plans.php">
							<button class="btn btnRm w-100 my-1" >Buy Now</button>
						</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 text-center cardDivplan">
				<div class="cardItems rounded">
					<img class="" style="width:50%; " src="./Images/RMTKXAZIB1cN2RA8GLgbhs8DmGl0qj01ACRlEFCG.png" alt="Gold">
					<div class="cardHeading text-center">
						GOLD
					</div>
					<div class="cardContent">
						<ul class="text-capitalize">
							<li>Intermediate level</li>
							<li>6 months</li>
							<li>0 mentorship</li>
						</ul>
					</div>
					<div class="text-center">
						<strong>Rs. 5499/-</strong>
						<h6>6 Months</h6>
					</div>
					<div class="read-more text-center pb-2">
						<a class="text-decoration-none" href="./premium-plans.php">
							<button class="btn btnRm w-100 my-1" >Buy Now</button>
						</a>
					</div>
				</div>
			</div>
			

			<div class="col-md-4 text-center mb-5 cardDivplan">
				<div class="cardItems rounded">
					<img class="" style="width:50%; " src="./Images/1dD4w1xIQIViixofGwsq8LdKysEx4BDug5hdpys6.png" alt="Diamond">
					<div class="cardHeading text-center">
						DIAMOND
					</div>
					<div class="cardContent">
						<ul class="text-capitalize">
							<li>Advanced level</li>
							<li>9 months</li>
							<li>0 mentorship</li>
						</ul>
					</div>
					<div class="text-center">
						<strong>Rs. 9999/-</strong>
						<h6>12 Months</h6>
					</div>
					<div class="read-more text-center pb-2">
						<a class="text-decoration-none" href="./premium-plans.php">
							<button class="btn btnRm w-100 my-1" >Buy Now</button>
						</a>
					</div>
				</div>
			</div>            
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