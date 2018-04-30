<!doctype html>
<html>
	<head>
	<style type="text/css">
		.invoice-box {
			max-width: 800px;
			margin: auto;
			padding: 30px;
			border: 1px solid #eee;
			box-shadow: 0 0 10px rgba(0, 0, 0, .15);
			font-size: 16px;
			line-height: 24px;
			font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			color: #555;
		}
		
		.invoice-box table {
			width: 100%;
			line-height: inherit;
			text-align: left;
		}
		
		.invoice-box table td {
			padding: 5px;
			vertical-align: top;
		}
		
		.invoice-box table tr td:nth-child(2) {
			text-align: right;
		}
		
		.invoice-box table tr.top table td {
			padding-bottom: 20px;
		}
		
		.invoice-box table tr.top table td.title {
			font-size: 45px;
			line-height: 45px;
			color: #333;
		}
		
		.invoice-box table tr.information table td {
			padding-bottom: 40px;
		}
		
		.invoice-box table tr.heading td {
			background: #eee;
			border-bottom: 1px solid #ddd;
			font-weight: bold;
		}
		
		.invoice-box table tr.details td {
			padding-bottom: 20px;
		}
		
		.invoice-box table tr.item td{
			border-bottom: 1px solid #eee;
		}
		
		.invoice-box table tr.item.last td {
			border-bottom: none;
		}
		
		.invoice-box table tr.total td:nth-child(2) {
			border-top: 2px solid #eee;
			font-weight: bold;
		}
		
		@media only screen and (max-width: 600px) {
			.invoice-box table tr.top table td {
				width: 100%;
				display: block;
				text-align: center;
			}
			
			.invoice-box table tr.information table td {
				width: 100%;
				display: block;
				text-align: center;
			}
		}
		
		/** RTL **/
		.rtl {
			direction: rtl;
			font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		}
		
		.rtl table {
			text-align: right;
		}
		
		.rtl table tr td:nth-child(2) {
			text-align: left;
		}
		
		#qrcode img {
			float:left;
			width:50% !important;
		}
	</style>
	</head>
	<meta charset='utf-8'>
	<title>A simple, clean, and responsive HTML invoice template</title>

	<link href='<?php echo base_url('assets/css/makepayment.css')?>' rel='stylesheet'>
	<script src="<?php echo base_url('assets/js/qrcode.js')?>"></script>   
	
	<form method="post" action="<?php echo site_url()?>MakePayment/confirm">			
			
		<input type="hidden" name="invoice_id" value="<?php echo @$value['invoice_number']?>" />
		<input type="hidden" name="total_amount" value="<?php echo @$value['line_total']?>" />
		<input type="hidden" name="success_url" value="<?php echo site_url();?>MakePayment/success" />
		<input type="hidden" name="fail_url" value="<?php echo site_url();?>MakePayment/fail" />
		<input type="hidden" name="cancel_url" value="<?php echo site_url();?>MakePayment/cancel" />
		<input type="hidden" name="version" value="1v0" />	

		<!-- Customer Information !-->
		<input type="hidden" name="cus_name" value="<?php echo @$value['contact_name']?>">
		<input type="hidden" name="cus_email" value="<?php echo @$value['email_address']?>">	
		<input type="hidden" name="cus_add1" value="<?php echo @$value['address']?>">
		<input type="hidden" name="cus_add2" value="<?php echo @$value['address']?>">
		<input type="hidden" name="cus_city" value="<?php echo @$value['city']?>">
		<input type="hidden" name="cus_state" value="<?php echo @$value['state']?>">
		<input type="hidden" name="cus_postcode" value="<?php echo @$value['postcode']?>">
		<input type="hidden" name="cus_country" value="<?php echo @$value['country']?>">
		<input type="hidden" name="cus_phone" value="<?php echo @$value['phone']?>">
		<input type="hidden" name="cus_fax" value="<?php echo @$value['fax']?>">

		<!-- Shipping Information !-->
		<input type="hidden" name="ship_name" value="<?php echo @$value['contact_name']?>ABC XYZ">
		<input type="hidden" name="ship_add1" value="<?php echo @$value['address']?>">	
		<input type="hidden" name="ship_add2" value="<?php echo @$value['address']?>">
		<input type="hidden" name="ship_city" value="<?php echo @$value['city']?>">
		<input type="hidden" name="ship_state" value="<?php echo @$value['state']?>">
		<input type="hidden" name="ship_postcode" value="<?php echo @$value['postcode']?>">
		<input type="hidden" name="ship_country" value="<?php echo @$value['country']?>">

		<!-- Optional Parameters which will be stored and returned at the end !-->
		<input type="hidden" name="value_a" value="">
		<input type="hidden" name="value_b" value="">	
		<input type="hidden" name="value_c" value="">
		<input type="hidden" name="value_d" value="">	

		<!-- PRODUCT 1 !-->
		<input type="hidden" name="cart[0][product]" value="<?php echo @$value['description']?>" />
		<input type="hidden" name="cart[0][amount]" value="<?php echo @$value['unit_price']?>" />
			
		
		<!--- 
		<form id="payment_gw" name="payment_gw" method="POST" action="https://sandbox.sslcommerz.com/gwprocess/v3/process.php"> -->
		
		<div class='invoice-box'>
			<table cellpadding='0' cellspacing='0'>
				<tr class='top'>
					<td colspan='2'>
						<table>
							<tr>
								<td class='title'>
									<img src='http://shurucampus.com/assets/user/images/logo/logo.png' style='width:50%; max-width:200px;'>
								</td>
								
								<td>
									<br>
									{address}
								</td>
							</tr>
						</table>
					</td>
				</tr>
				
				<tr class='item'>
					<td>
						<br/>
						<br/>
					</td>
					
					<td>
					</td>
				</tr>
				<tr class='item'>
					<td>
						
						Invoice #: {invoice_number}<br>
						Invoice Date: {Invoice_date}<br>
						Due Date: {due_date}
					
					</td>
					
					<td>
					</td>
				</tr>
				
				<tr class='item'>
					<td>
						<br/>
						<br/>
					</td>
					
					<td>
					</td>
				</tr>
				
				<tr class='item'>
					<td colspan="2">
						Invoice To
					</td>
				</tr>
				<tr class='item'>
					<td>
						{contact_name}<br>
						{email_address}<br>			
						{clientAddress}
					</td>
					
					<td>
					</td>
				</tr>
				
				
				<tr>
					<td>
						<br/>
						<br/>
					</td>
					
					<td>
					</td>
				</tr>
				
				
				<tr>
					<td>
						<br/>
						<br/>
					</td>
					
					<td>
					</td>
				</tr>
				
				<tr class='heading'>
					<td>
						Item
					</td>
					
					<td>
						Price
					</td>
				</tr>
				
				<tr class='item'>
					<td>
						{description}							
					</td>
					
					<td style="text-align:right;">
						&#2547;{unit_price}
					</td>
				</tr>
				
				<tr class='item'>
					<td style="text-align:right; font-weight:bold; color:#000; width:80%;">
						Unit Total without TAX
					</td>
					
					<td style="text-align:right;">
						&#2547;{unit_price_without_tax}
					</td>
				</tr>
				
				<tr class='item last'>
					<td style="text-align:right; font-weight:bold; color:#000; width:80%;">
						Total without TAX
					</td>
					
					<td style="text-align:right;">
						&#2547;{total_without_tax}
					</td>
				</tr>
				
				<tr class='item last'>
					<td style="text-align:right; font-weight:bold; color:#000; width:80%;">
						TAX
					</td>
					
					<td style="text-align:right;">
						&#2547;{tax}
					</td>
				</tr>
				
				<tr class='heading'>
					<td></td>
					
					<td style="text-align:right;">
					   &#2547;{line_total}
					</td>
				</tr>
				
				
				
				<tr class='item'>
					<td>
						<br/>
						<br/>
					</td>
					
					<td>
					</td>
				</tr>
				
				
				<tr class='heading'>
					<td colspan='2' style='text-align:left'>
						To Make payment
					</td>
				</tr>
				
				
				
				<tr class=''>
					<td colspan='2' >
						<table>
							<tr>
								<td>
									<img style='border:1px solid #CCC;' src='https://chart.googleapis.com/chart?chs=256x256&cht=qr&chl={PaymentUrl}' />
								</td>
								<td style="vertical-align: middle;text-align: center;">
									< Scan <br/> OR <br/> Click >
								</td>
								<td>
									<div style='border: 1px solid #CCC;width: 258px;float: right;'>{PaymentButton}</div>
								</td>
							</tr>
						</table>
						
					
										
					</td>
				</tr>

			</table>
		</div>
			
	</form>	