<?php
include('./dbconection.php');
include('./header.php');

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

require_once("./PaytmKit/lib/config_paytm.php");
require_once("./PaytmKit/lib/encdec_paytm.php");

$ORDER_ID = "";
$requestParamList = array();
$responseParamList = array();

if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

    // In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
    $ORDER_ID = $_POST["ORDER_ID"];

    // Create an array having all required parameters for status query.
    $requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
    
    $StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
    
    $requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

    // Call the PG's getTxnStatusNew() function for verifying the transaction status.
    $responseParamList = getTxnStatusNew($requestParamList);
}
?>

<div class="container-fluid bg-dark">
 <div class="row">
 <img src="./image/coursebanner.jpg" alt="courses"
 style="height:300px; width:100%; object-fit:cover; box-shadow:10px;"/>
 </div>
</div>
<div class="container">
  <h2 class="text-center my-4">Payment Status</h2>

  <form action="" style="margin:auto;max-width:400px" method= "post" class="mt-3 form-inline d-print-none">
       <div class="form-group mr-3 ">
       <label for="checkid">Order ID: </label>
       <input class="form-control ml-3" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
        name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
       </div>
       <button type="submit" class="btn btn-danger" onclick="">Veiw</button>
    </form>
</div>

<style>
     @media print {
		 body * {
			 visibility :hidden;
		 }
		 .print-container, .print-container * {
			 visibility : visible;
		 }
		 
	 }
   </style>

<div class="container print-container">
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
         <td><button type="button" class="btn btn-danger"
         onclick="javascript:window.print();">Print</button></td>
        </tr>
       </tbody>
       </table> 
    </div>
   </div>
   <?php
  }?>
</div>

<div class="mt-5">
<?php 
  include('./contact.php');
?>
</div>

<?php 
  include('./footer.php');
 
?>