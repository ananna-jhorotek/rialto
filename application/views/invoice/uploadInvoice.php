
	<h2>Upload Invoice</h2>

	<div id="body">
			<form role="form" class="" action="<?php echo base_url('UploadInvoice/storeInvoiceFromExcel');?>" method="post" enctype="multipart/form-data">
						

					<label for="exampleInputFile1">File input</label><br/>
					<input type="file" name="excelFile" id="exampleInputFile1">
								<?php if(isset($upload_error)) echo '<span style="color: #ff0000;">'.$upload_error.'<span/>';

								?>

		<br/>
		<br/>

		<button type="submit" class="btn blue">Submit CSV</button>
		</form>
		
		
	</div>


