<?php
include('./header.php');
?>


<div class="container mt-10">
<h2 class="text-center my-4">Payment Status</h2>
<form method="post" action="">
  <div class="form-group row">
    
    <div class="text-center">
      <input type="text" maxlength="10" size="20" class=" col-xs-offset-3 form-control " placeholder="Order ID:">
    </div>
    <div class="text-left form-inline d-print-none">
      <br>
      <div><input class="form-control mx-3" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
    name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>"></div>
    <div>
      <input class="btn btn-danger" type="submit" value="View" name="submit" href="payment.php"><br>
    </div>
  </div>
</form> 
</div>

<div class="container">
<?php
  if(isset($responseParamList) && count ($responseParamList) >0 )
  {
   ?>  
   <div class="row justify-content-center">
    <div class="col-auto">
     <h2 class="text-center">Payment Receipt</h2>
     <table class="table table-bordered">
	<tbody>
		<?php
			foreach($responseParamList as $paramName => $paramValue) {
             if(($paramName == "TXNID") || ($paramName == "ORDER_ID") || 
             ($paramName == "TXNAMOUNT") || ($paramName == "STATUS")){
                ?>
              <tr>
               <td><label><?php echo $paramName?></label></td>
               <td><?php echo $paramValue ?></td>
              </tr>  
            <?php }
            }?>
            <tr>
         <td><button type="button" class="btn btn-info"
         onclick="javascript:window.print();">Print</button></td>
        </tr>
       </tbody>
       </table> 
    </div>
   </div>
   <?php
  }?>
</div>


<!--start including contact-->
<?php
include('./contact.php');
?>
<!--start including contact-->


<!--start including footer-->
<?php
include('./footer.php');
?>
<!--start including footer-->