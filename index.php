<?php
include('./dbconection.php');
include('./header.php');
?>
<!--end navigation -->

<!--start video -->
 <div class="container-fluid remove-vid">
   <div class="vid">
     <video playsinline autoplay muted loop>
       <source src="video/laptop.mp4">
     </video> 
     <div class="vid-overlay"></div>
     <div class="vid-content">
       <h1 class="my-content">Welcome to DEducaion</h1>
       <small class="my-content">Exciting Education</small><br><br>
       <?php
       if(!isset($_SESSION['is_login'])){
         echo '<a href="#" class="btn btn-denger" data-bs-toggle="modal" data-bs-target="#stuRegModalcenter">Get Started</a>';

       }
      
       ?>
    </div>
  </div>
<!--end video -->

<!--start text banner-->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Coureses</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i> Instructors</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee..</h5>
    </div>
  </div>
</div>


<!--end text banner-->


<!--end popular courses-->
<!--start new couse-->
<div class="container mt-5">
<h1 class="text-center ">Popular Courses</h1>
<div class="row justify-content-center">
<?php
 $sql = "SELECT * FROM course LIMIT 3";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
    $course_id = $row['course_id'];
    echo ' <div class="col-md-4 mt-5">
    <div class="card shadow" style="width: 20rem;">
<div class="inner ">
<img src="'. str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="C++">
</div>
  <div class="card-body">
    <h5 class="card-title">'.$row['course_name'].'</h5>
    <p class="card-text">'.$row['course_desc'].'</p>
    <div class="card-footer">
         <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].' </del></small>
        <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p>
    <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-success text-white float-right">Enroll</a>
</div>
  </div>
</div>
</div> ';
   }
 }
?>
</div>
 
<div class="row justify-content-center">
<?php
 $sql = "SELECT * FROM course LIMIT 3, 3";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
    $course_id = $row['course_id'];
    echo ' <div class="col-md-4 mt-5">
    <div class="card shadow" style="width: 20rem;">
<div class="inner ">
<img src="'. str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="C++">
</div>
  <div class="card-body">
    <h5 class="card-title">'.$row['course_name'].'</h5>
    <p class="card-text">'.$row['course_desc'].'</p>
    <div class="card-footer">
         <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].' </del></small>
        <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p>
    <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-success text-white">Enroll</a>
</div>
  </div>
</div>
</div> ';
   }
 }
?>
</div>
</div>
<!--end new couse-->

<!--start contact us-->
<?php
include('./contact.php');
?>
<!--end contact us--> 
<!--new stat feedback-->

<?php
include('./feedback.php');
?>

<!--new end feedback-->

<?php
include('./footer.php');
?>