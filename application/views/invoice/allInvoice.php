<style type="text/css">
.btn {
	//width:200px;
}
</style>
<div class="panel panel-default">
  <div class="panel-heading">Invoice List</div>
	  <div class="panel-body">        
		  <table class="table table-bordered">
			<thead>
			  <tr>
				<th>Invoice ID</th>
				<th>Invoice Date</th>
				<th>Name</th>
				<th>Email</th>
				<th>Description</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>

				<?php
				
				// echo '<pre/>';
				// print_r($invoices);
				// die;

					if($invoices){
						
						foreach($invoices as $invoice){
							?>
							<tr>
							   
								<td><?php echo $invoice['invoice_number']; ?></td>
								<td><?php echo $invoice['invoice_date']; ?></td>
								<td><?php echo $invoice['contact_name']; ?></td>
								<td><?php echo $invoice['email_address']; ?></td>
								<td><?php echo $invoice['description']; ?></td>
								<td style="text-align:center;">
									
									<form action="<?php echo base_url('EmailInvoice/send_mail');?>" method="post">
										<input type="hidden" name="email" value="<?php echo $invoice['email_address'];?>">
										<input type="hidden" name="id" value="<?php echo $invoice['invoice_number'];?>">
										<input type="hidden" name="body" value="<?php echo $invoice['description'];?>">
										<input type="hidden" name="email_status" value="<?php echo $invoice['emailed_status'];?>">
										<?php 
										if($invoice['emailed_status'] < 1 )
										{	
										?>
											<button type="submit" class="btn btn-success">Email Invoice</button>
										<?php
										}
										elseif($invoice['emailed_status'] == 1)
										{
										?>
											<button type="submit" class="btn btn-success">Invoice Sent</button>
										<?php
										}                     	
										else
										{
										?>
											<button type="submit" title="Send Again" class="btn btn-success"><?php echo $invoice['emailed_status'];?> time sent</button>
										<?php
										}
										?>
									</form>
									
									<a title="View invoice" href="<?php echo site_url('invoice/viewInvoice/'.$invoice['id']);?>"><button class="btn btn-info">View</button><br/></a>
									<a title="Pay Manually" href="<?php echo site_url('invoice/viewInvoice/'.$invoice['id']);?>"><button class="btn btn-danger">Pay Manually</button><br/></a>
									<a title="Change Invoice Status" href="<?php echo site_url('invoice/viewInvoice/'.$invoice['id']);?>"><button class="btn btn-warning">Change Status</button></a>
								</td>

							</tr>
				<?php
						}
					}
				?>
			  
			</tbody>
		  </table>



	  </div>
</div>
