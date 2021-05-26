<!--start about us-->

<footer class="mt-5">
  <div class="container-fluid p-0">
    <div class="row text-left">
      <div class="col-md-6 col-sm-5 text-center ">
        <h4 class="text-light">About us</h4>
        <p class="text-muted">DEducaion was founded in 2014 with a mission to create skilled Software Engineers
           for our country and the world. We are here to bridge the gap between the quality of skills demanded by 
           industry and the quality of skills imparted by conventional institutes. At DEducaion, we strive to 
           increase student interest by providing hands on practical training on every concept taught in the classroom.</p>

        </p>
      </div>
      <div class="col-md-4 col-sm text-center"> 
        <h5 class="text-light">Category</h5>
        <a class="text-muted" href="course.php">Web Devlopment</a><br />
        <a class="text-muted" href="course.php">Android Devlopment</a><br />
        <a class="text-muted" href="course.php">ios Devlopment</a><br />
        <a class="text-muted" href="course.php">DevOps</a><br />
      </div>
      <div class="col-md-2 col-sm text-center">
        <h4 class="text-light">Follow Us</h4>
        <p class="text-muted">Let us be social</p>
        <div class="social-icon">
        <div class="column text-light">
          <i class="fa-2x fab fa-linkedin" href="https://www.linkedin.com/in/jivendra-kumar-69a1b414b/"></i>
          <i class="fa-2x fab fa-facebook-f" href="#"></i>
          <i class="fa-2x fab fa-instagram"></i>
          <i class="fa-2x fab fa-github" href="#"></i>
        </div>
      </div>
      </div>
      <p class="pt-15 text-muted text-center">Copyright ©2021 All rights reserved | This template is made with by
        <span> <a href="#Login" data-bs-toggle="modal" data-bs-target="#adminLoginModalcenter">Admin</a> DEducaion</span>
    </div>
  </div>

<!--end about us-->

<!--end contact us-->


<!--start student registration-->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="stuRegModalcenter" tabindex="-1" aria-labelledby="stuRegModalcenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalcenter">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form id="stuRegForm">
          <div class="form-group">
           
            <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
            <small id="statusMsg1"></small>
            <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
          </div>
         <div class="form-group">
           <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight">Email address</label>
           <small id="statusMsg2"></small>
           <input type="email" class="form-control" placeholder="Email address" name="stuemail" id="stuemail">
           <small class="form-text">We'll never share your email with anyone else.</small>
         </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">Password</label>
            <small id="statusMsg3"></small>
            <input type="password" class="form-control" placeholder="Password" id="stupass">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-info" onclick="addStu()" id="signup">Signup</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--end student registration-->


<!--start student login-->

<div class="modal fade" id="stuLoginModalcenter" tabindex="-1" aria-labelledby="stuLoginModalcenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalcenter">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form id="stuLoginForm">
         <div class="form-group">
           <i class="fas fa-envelope"></i><label for="stuLogmail" class="pl-2 font-weight">Email address</label>
           <input type="email" class="form-control" placeholder="Email address" name="stuLogemail" id="stuLogemail">

         </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-info" id="stuLogbtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!--end student login-->

<!--start admin login-->
<div class="modal fade" id="adminLoginModalcenter" tabindex="-1" aria-labelledby="adminLoginModalcenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalcenter">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form id="adminLoginForm">
         <div class="form-group">
           <i class="fas fa-envelope"></i><label for="adminLogmail" class="pl-2 font-weight">Email address</label>
           <input type="email" class="form-control" placeholder="Email address" name="adminLogemail" id="adminLogemail">

         </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
          </div>
        </form>
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-info" id="adminLogbtn" onclick="checkAdminLogin()">login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
//</div>
<!--end admin login-->



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>>
<script type="text/javascript">
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoPlay :true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

</script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
</body>
</html>
  