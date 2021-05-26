function checkAdminLogin() {
    var adminLogEmail = $("#adminLogemail").val();
    var adminLogPass = $("#adminLogpass").val();
    $.ajax({
      url:"admin/admin.php",
      method: "POST",
      data:{
        checkLogemail: "checklogemail",
        adminLogEmail: adminLogEmail,
        adminLogPass: adminLogPass,
      },
       success: function(data){
         if(data == 0){
           $("#statusAdminLogMsg").html(
             '<small class="alert alert-danger">Invalid Email ID or Password !</small>'
           );
         } else if (data == 1){
           $("#statusAdminLogMsg").html(
             '<small class="alert alert-success">Success Loading...</small>'
           );
           setTimeout(()=>{
             window.location.href = "admin/AdminDash.php";
           }, 1000);
         }
       },
    });
  }