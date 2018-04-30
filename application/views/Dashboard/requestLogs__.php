<script>
$(document).ready(function() {
	$('#example').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": "employee-grid-data.php"
	} );
} );

</script>



<body onload="init();" style="font-size: 12px;">
<div class="col-lg-3 text-center">
	<div class="panel-group"  style="font-size: 12px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
		
				&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
			<div class="panel-body">	
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation"><a href="<?php echo base_url('Reports/requestLogs');?>">REQUEST LOGS</a></li>
					<li role="presentation"><a href="<?php echo base_url('Reports/myRequest');?>">MY REQUEST</a></li>
				</ul>


				
			</div>			
		</div>			
	</div>

</div>



<div class="col-lg-9">
	
	<div class="panel-group"  style="font-size: 12px !important;">
		<div class="panel panel-primary">
			<div  class="panel-heading" id="mgs" style="text-transform:uppercase;">
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			</div>
			<div class="panel-body" style="max-height: 450px; overflow-x: scroll; overflow-y: scroll;">
				<table id="example" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>User</th>
							<th>Source url</th>
							<th>laccellid</th>
							<th>bts</th>
							<th>lac</th>
							<th>thana</th>
							<th>operator</th>
							<th>request_for</th>
							<th>cellid</th>
							<th>latitude</th>
							<th>longitude</th>
							<th>area_range</th>
							<th>createat</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>

</body>
