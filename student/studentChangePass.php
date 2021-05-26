<?php
if(!isset($_SESSION)){
  session_start();
}
include('./stuInclude/stuheader.php');
include_once('../dbconection.php');

if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stuLogEmail'];
}else {
    echo "<script> location.href='../index.php'; </script>";
}

if(isset($_REQUEST['stuPassUpdateBtn'])){
    if(($_REQUEST['stuNewPass'] == "")){
        $passmsg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">field required</div>' ;
    }else{
        $sql = "SELECT * FROM student1 WHERE stu_email='$stuEmail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $stuPass = $_REQUEST['stuNewPass'];
            $sql = "UPDATE student1 SET stu_pass = '$stuPass' WHERE stu_email = '$stuEmail'";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>' ;
            }else{
                 $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>' ;
            }
        }
    }
}        
?>

<div class="col-sm-9 col-md-10">
 <div class="row">
   <div class="col-sm-6" method="POST">
     <form class="mt-5 mx-5" method="POST" >
      <div class="from-group">
       <label for="inputEmail">Email</label>
       <input type="email" class="form-control" id="inputEmail"  value="
       <?php echo $stuEmail ?>" readonly>
      </div>
      <div class="from-group">
       <label for="inputnewpassword">New Password</label>
       <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="stuNewPass">
      </div>
      <button type="submit" class="btn btn-info mr-4 mt-4" name="stuPassUpdateBtn">Update</button>
      <button type="reset" class="btn btn-info mt-4" >Reset</button>
     <?php if(isset($passmsg)) {echo $passmsg;} ?>
     </form>
   </div>
 </div>
</div>

</div>


<?php 
include('./stuInclude/stufooter.php');
?>