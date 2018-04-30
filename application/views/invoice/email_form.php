
<div class="panel panel-default">
  <div class="panel-heading">Panel Heading</div>
  <div class="panel-body">

  	      <?php 
         echo $this->session->flashdata('email_sent'); 

      		?> 

		<form  method="post" action="<?php echo base_url('EmailInvoice/send_mail');?>" >

		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="to">
		  </div>

		  <div class="form-group">
		    <label for="pwd">Email Body:</label>
		    <textarea class="form-control" rows="5" id="comment" name="body"></textarea>
		  </div>

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>


  </div>
</div>
