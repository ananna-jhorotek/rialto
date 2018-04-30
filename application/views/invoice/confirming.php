<?php

// echo '<pre/>';
// print_r($data);
// die;

?>

<body onload="document.getElementById('payment-form').submit();">

	<div align="center">
		<h1>
			Please Wait... You Will be Redirected Shortly<br/>
			Don't Refresh or Press Back 
		</h1>
	</div>
  
	<form id='payment-form' action="https://securepay.sslcommerz.com/gwprocess/v3/process.php" method="post">
		<input type="hidden" name="tran_id" value="<?php echo $data['tran_id']; ?>" />
		<input type="hidden" name="store_id" value="shurucampuslive" />
		<input type="hidden" name="cus_name" value="<?php echo $data['cus_name']; ?>" />
		<input type="hidden" name="cus_email" value="<?php echo $data['cus_email']; ?>" />
		<!--<input type="hidden" name="cus_phone" value="<?php echo $data['cus_phone']; ?>" />-->
		<input type="hidden" name="cus_phone" value="<?php echo $data['ship_postcode']; ?>" />
		<input type="hidden" name="total_amount" value="<?php echo $data['total_amount']; ?>" />
		<input type="hidden" name="success_url" value="<?php echo site_url();?>MakePayment/success" />
		<input type="hidden" name="fail_url" value="<?php echo site_url();?>MakePayment/failed" />
		<input type="hidden" name="cancel_url" value="<?php echo site_url();?>MakePayment/cancel" />
	</form>
    

</body>
			