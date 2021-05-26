$(document).ready(function(){
  $("#stuemail").on("keypress blur", function () {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var stuemail= $("#stuemail").val();
    $.ajax({
      url:"student/addstudent.php",
      method: "POST",
      data:{
        checkemail: "checkmail",
        stuemail: stuemail,
      },
      success: function(data){
       // console.log(data);
       if(data !=0)
       {
        $("#statusMsg2").html('<small style="color:red;">email id already used..</small>');
        $("#signup").attr("disabled",true);
       }else if(data==0 && reg.test(stuemail)){
        $("#statusMsg2").html('<small style="color:green;">There You Go !</small>');
        $("#signup").attr("disabled",false);
       }else if(!reg.test(stuemail)){
        $("#statusMsg2").html('<small style="color:red;">Please enter valid email e.g example@mail.com</small>');
        $("#signup").attr("disabled",false);
       }
      },
    });
  });
});

function addStu(){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();

   if(stuname.trim()==""){
     $("#statusMsg1").html('<small style="color:red;">Please enter the name</small>');
     $("#stuname").focus();
     return false;
   } else if(stuemail.trim()==""){
    $("#statusMsg2").html('<small style="color:red;">Please enter the email</small>');
    $("#stuemail").focus();
    return false;
   }else if(stuemail.trim()!="" && !reg.test(stuemail))
   {
    $("#statusMsg2").html('<small style="color:red;">Please enter valid email e.g example@mail.com</small>');
    $("#stuemail").focus();
    return false;
   }else if(stupass.trim()==""){
    $("#statusMs3").html('<small style="color:red;">Please enter the password</small>');
    $("#stupass").focus();
    return false;
   }else{
     $.ajax({
        url: "student/addstudent.php",
        method: "POST",
        dataType: "json",
        data:{
              stusignup: "stusignup",
              stuname:stuname,
              stuemail:stuemail,
              stupass:stupass,
        },
        success: function (data) {
              //console.log(data);
              if(data=="ok"){
                  $("#successMsg").html("<span class='alert alert-success'> Registration Successful !</span>");
                  clearStuRegField();
                   }
                   else if(data=="failed"){
                    $("#successMsg").html("<span class='alert alert-danger'>Registration Failed !</span>");
                  }
              
            },
    });
   } 
}

//empty All fields
function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}

function checkStuLogin(){
  var stuLogEmail = $("#stuLogemail").val();
  var stuLogPass = $("#stuLogpass").val();
  $.ajax({
    url:"student/addstudent.php",
    method: "POST",
    data:{
      checkLogemail: "checklogemail",
      stuLogEmail: stuLogEmail,
      stuLogPass: stuLogPass,
    },
     success: function(data){
       if(data == 0){
         $("#statusLogMsg").html(
           '<small class="alert alert-danger">Invalid Email ID or Password !</small>'
         );
       } else if (data == 1){
         $("#statusLogMsg").html(
           '<div class="spinner-border text-success" role="status"></div>'
         );
         setTimeout(()=>{
           window.location.href = "index.php";
         }, 1000);
       }
     },
  });
}