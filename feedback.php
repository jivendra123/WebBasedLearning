<div class="container-fluid mt-5" style="background-color:#2E8B83" id="Feedback">
<h1 class="text-center testyheading p-4">What our Learner's Say about us</h1>
<div class="row ">
<div id="testimonial-slider" class="owl-carousel owl-theme">

<?php 
  $sql = "SELECT s.stu_name, s.stu_img, f.f_content FROM student1 AS s JOIN feedback AS f ON
  s.stu_id=f.stu_id";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $s_img = $row['stu_img'];
      $n_img = str_replace('..','.',$s_img);
?>
    <div class="testimonial"> <span class="icon fa fa-quote-left"></span>
    <p class="description"> 
     <?php echo $row['f_content']; ?>
    </p>
     <div class="testimonial-content">
     <div class="pic">
     <img src="<?php echo $n_img ?>" alt=""/>
     </div>
     <h3 class="title"><?php echo $row['stu_name'] ?></h3>
     </div>
     </div>
   <?php }
  }?>
     

</div>
</div>
</div>