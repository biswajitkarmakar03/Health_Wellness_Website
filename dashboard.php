<!DOCTYPE html>
<html lang="en">
<head>

    <?php include_once 'link.php'; ?>
    <title>Programs - Fitset</title>

</head>

<body onload="activeMenu('3')">


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="h1  fw-bold text-uppercase mt-5"><span class="subHeading">Yoga - Beginners</span></h1>
      <p>
      Welcome to our beginner's guide to yoga! If you're new to the world of yoga and looking to embark on a journey of self-discovery, relaxation, and physical well-being, you've come to the right place. In this comprehensive guide, we will introduce you to the fundamental principles and postures of yoga, providing you with a solid foundation to kickstart your practice.
      </p>
    </div>
  </div>
</div>

<?php
    $queryVideos=mysqli_query($con,"select * from course_videos");
    while($rowVideos=mysqli_fetch_array($queryVideos))
    {
?>
      <div class="container mt-3 mb-5 p-4">
        <div class="row programCard" >
          <div class="col-md-4">
            <img style="width:100%; height:auto;" src="./Images/<?php echo $rowVideos["video"]; ?>" alt="Yoga Image"/>
          </div>
          <div class="col-md-8">
                <strong><?php echo $rowVideos["video_tittle"]; ?></strong>
                <p> 
                <?php echo $rowVideos["media_url"]; ?>
                </p>
                <div class="col-4 buttons ">
                  <div class="row">
                    <div class="col">
                      <a class="btn btnRm w-100 my-2" href="#">Play Video</a>
                    </div>
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