<div class="content">		

	<form name="fileupload" id="fileupload" action="<?php echo base_url('Admin/upload');?>" method="post" enctype="multipart/form-data">
		
		<div class="search_bar text-center">				
			<label >
				Upload CELLSITE data file : 
			</label>
			<label class="btn btn-default btn-file">
				Browse<input id="gsmdata" name="gsmdata" type="file" style="display: none;">
			</label>				
		</div>
			<div class="text-center">
				<a href="<?php echo base_url('Admin/downloadSampleCellsiteExcel');?>">
					Downlaod Sample File
				</a>
			</div>
	</form>
	
	<?php
		
		if(file_exists(FCPATH.'downloads/cellsite.csv')) {
			?>
			<div class="text-center">
				<a href="<?php echo base_url('downloads/cellsite.csv');?>">
					Downlaod Backup File
				</a>
			</div>
			<?php
			
		}
	?>

	<script type="text/javascript">

		document.getElementById("gsmdata").onchange = function() {
			document.getElementById("fileupload").submit();
		};
	</script>
</div>
 <?php

if($this->session->flashdata('success_msg')){
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg');?>
    </div>
    <?php
}
?>
<?php
if($this->session->flashdata('error_msg')){
    ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_msg');?>
    </div>
    <?php
}
?>

<!--div class="content">		
<form name="fileupload" id="fileupload" action="<?php echo base_url('Admin/upload');?>" method="post" enctype="multipart/form-data">
	<div class="search_bar text-center">				
		<label >
			Upload CELLSITE data file : 
		</label>
		<label>
			<input type="file"  name="file">
		</label>				
	</div>
	<div class="text-center">
		<a href="<?php echo base_url('Admin/downloadSampleCellsiteExcel');?>">
			Downlaod Sample File
		</a>
	</div>
	<div class="text-center">
		<button type="submit" class="btn green"><b>Submit</b></button>
	</div>
</form>
</div-->