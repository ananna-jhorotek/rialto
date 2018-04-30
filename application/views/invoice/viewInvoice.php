<div style=" text-align: center; margin: 1%; ">
	<a title="View invoice" href="<?php echo site_url('invoice/viewInvoice/'.$invoice['id']);?>"><button class="btn btn-success">Send Invoice</button></a>
	<a title="View invoice" href="<?php echo site_url('invoice/viewInvoice/'.$invoice['id']);?>"><button class="btn btn-info">View</button></a>
	<a title="Pay Manually" href="<?php echo site_url('invoice/viewInvoice/'.$invoice['id']);?>"><button class="btn btn-danger">Pay Manually</button></a>
	<a title="Change Invoice Status" href="<?php echo site_url('invoice/viewInvoice/'.$invoice['id']);?>"><button class="btn btn-warning">Change Status</button></a>
</div>
<?php

	print_r($invoice_template);

?>