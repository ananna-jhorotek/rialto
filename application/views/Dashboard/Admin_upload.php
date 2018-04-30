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
	</form>

	<script type="text/javascript">

		document.getElementById("gsmdata").onchange = function() {
			document.getElementById("fileupload").submit();
		};
	</script>
</div>