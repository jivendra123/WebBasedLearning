<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    include('./adminInclude/header.php');
    include("../dbconection.php");

	// following files need to be included
	require_once("../PaytmKit/lib/config_paytm.php");
	require_once("../PaytmKit/lib/encdec_paytm.php");

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
 <div class="container col-sm-9 mt-5 mx-0">
  <h2 class="text-center my-4">Payment Status</h2>

  <form action="" style="margin:auto;max-width:400px" method= "post" class="mt-3 form-inline d-print-none">
       <div class="form-group mr-3 ">
       <label for="checkid" class="col-form-label">Order ID: </label>
       <input class="form-control ml-3" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
        name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
       </div>
       <button type="submit" class="btn btn-danger" onclick="">Veiw</button>
    </form>


 </div>
 <?php
  if(isset($responseParamList) && count ($responseParamList) >0 )
  {
   ?>   

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
    <div class="justify-content-center">
    <div class="col-auto">
    <h2 class="text-center">Payment Receipt</h2>

    <table class="table table-bordered">
	<tbody>
		<?php
			foreach($responseParamList as $paramName => $paramValue) {
		?>
		    <tr>
			<td><label><?php echo $paramName?></label></td>
			<td> <?php echo $paramValue?></td>
		    </tr>
		<?php
		}
		?>
        <tr>
         <td><button type="button" class="btn btn-info"
         onclick="javascript:window.print();">Print</button></td>
        </tr>
	</tbody>
    </table>

    </div>
    </div>
    </div>
		
    <?php
}
?>
</form>
<?php
include('./adminInclude/footer.php');
?>