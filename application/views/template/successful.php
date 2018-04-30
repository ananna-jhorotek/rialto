<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>A simple, clean, and responsive HTML invoice template</title>

	<link href='<?php echo base_url('assets/css/makepayment.css')?>' rel='stylesheet'>
	<script src="<?php echo base_url('assets/js/qrcode.js')?>"></script>  	
		
		<div style="font-size:14px;font-family:verdana">
    <div style="text-align:center">
        <img src='http://shurucampus.com/assets/user/images/logo/logo.png' style='width:50%; max-width:200px;'>
    </div>
    <table style="border-collapse:collapse;font-size:14px;font-family:Helvetica,Arial,sans-serif" width="100%">
        <tbody>
            <tr style="vertical-align:top">
                <td style="text-align:left">
                    <strong>Invoice No:</strong> {invoice_number}
                    <br>
                    <strong>To:</strong>
                    <a href="mailto:muktadir@jhorotek.com" target="_blank"> {email_address}</a>
                    <br>
                </td>
                <td style="text-align:right">
                    <strong>Date:</strong> {Invoice_date}</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br/></td>
            </tr>
            <tr style="background:#245199;color:#fff">
                <td colspan="2" align="center">ORDER DETAILS</td>
            </tr>
            <tr>
                <td style="background:#f1f1f1;border-bottom:1px solid #dddddd;padding-left:3px">Payment Status</td>
                <td style="background:#f9f9f9;border-bottom:1px solid #dddddd;padding-left:3px">Successful</td>
            </tr>
            <tr>
                <td style="background:#f1f1f1;border-bottom:1px solid #dddddd;padding-left:3px">Product Details</td>
                <td style="background:#f9f9f9;border-bottom:1px solid #dddddd;padding-left:3px">{description}</td>
            </tr>
            <tr>
                <td style="background:#f1f1f1;border-bottom:1px solid #dddddd;padding-left:3px">Total Amount</td>
                <td style="background:#f9f9f9;border-bottom:1px solid #dddddd;padding-left:3px">{line_total}</td>
            </tr>
            <tr>
                <td style="background:#f1f1f1;border-bottom:1px solid #dddddd;padding-left:3px">Purchase Time</td>
                <td style="background:#f9f9f9;border-bottom:1px solid #dddddd;padding-left:3px">2017-10-15 11:59:39</td>
            </tr>
            <tr>
                <td style="background:#f1f1f1;border-bottom:1px solid #dddddd;padding-left:3px">Transaction ID</td>
                <td style="background:#f9f9f9;border-bottom:1px solid #dddddd;padding-left:3px">{transactionId}</td>
            </tr>
            <tr>
                <td style="background:#f1f1f1;border-bottom:1px solid #dddddd;padding-left:3px">Bank Transaction ID</td>
                <td style="background:#f9f9f9;border-bottom:1px solid #dddddd;padding-left:3px">{bank_tran_id}</td>
            </tr>
            <tr>
                <td style="background:#f1f1f1;border-bottom:1px solid #dddddd;padding-left:3px">Card Type</td>
                <td style="background:#f9f9f9;border-bottom:1px solid #dddddd;padding-left:3px">{card_type}</td>
            </tr>
            <tr>
                <td style="background:#f1f1f1;border-bottom:1px solid #dddddd;padding-left:3px">Card No</td>
                <td style="background:#f9f9f9;border-bottom:1px solid #dddddd;padding-left:3px">{card_no}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <br>Thank you,<br/>
                    Shuru Campus Team
                </td>
            </tr>
        </tbody>
    </table>
    <div style="color:#ff0000;font-size:14px;padding:30px 0px 10px;font-weight:bold;text-decoration:underline">Terms &amp; Conditions: * DUMMY TEXT * </div>
    <div style="color:#ff0000;font-size:12px"> * This invoice shall be treated as the Delivery Challan of the service described above.
        <br> * Please contact us if you have any kind of quires, complaints or claims regarding this service. You may contact us via direct mail or phone at:
        <br>
        <div style="padding-left:25px">E-mail: <a href="mailto:support@easy.com.bd" target="_blank">support@easy.com.bd</a> </div>
        <div style="padding-left:25px">Tel: +880 9612 22 6969, +880 9666 77 6969, +880 2 831 6969</div>
        * We/SSL shall not accept any type of claims or complaints regarding the service, if the customer fails to contact us within 5 (Five) working days from the invoice date. In that case, it will be assumed that the customer has successfully received and enjoyed the service as per his/her satisfaction. </div>
</div>
			