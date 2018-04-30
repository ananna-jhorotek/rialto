<script>
    var json;
    $(document).ready(function(){			
		$('#addbutton').click(			
			function(){
				var subcrime = document.getElementById('subcrime').value;
				var subcrime = subcrime.trim();
				$('#subcrime').val("");						
				$('#InputsWrapper').show();
				// cellid = cellid.substring(1,cellid.lastIndexOf(","));
				$('#input').val($('#input').val()+subcrime+",");				
				document.getElementById('subcrime').value="";
			}
		);
		function mypopup(e){
			// alert(e.target.popupView);
			  //$("#Modal").modal("show");			
		}

    });



</script>
<div class="container">
	<div class="row">
		<div class="panel-group align-middle"  style="font-size: 12px;">
			<div class="panel panel-primary">
				<div class="panel-heading text-left	">
					Crime add
				</div>
				<div class="panel-body">
					<div class="col-lg-3">
					</div>
					<div class="col-lg-6">
						<div class="panel-group align-middle"  style="font-size: 12px;">
							<div class="panel panel-primary">
								<div class="panel-heading text-left	">
									Single Crime add
								</div>
								<div class="panel-body">
								
									
									<form class="form-signin" method="post"  action="<?php echo site_url('admin/crimedata')?>" id="login-form">
										<div class="panel-body">									
											<div class="form-group">
												<div id="">
													<div><input class="form-control" type="text" name="crimename" id="crimename" placeholder="ENTER CRIME NAME" required></div>
												</div>								
											</div>							
											
											<div class="form-group">
												<div id="">
													<div><input class="form-control" type="text" name="crimedetails" id="crimedetails" placeholder="ENTER CRIME DETAILS"></div>
												</div>								
											</div>							
											
											<div class="form-group">
												<select id="reqtype" name="operator" class="form-control" required="required">
													<option value="na" selected="">NO SUBCRIME</option>
													<option value="addcrime">ADD SUBCRIME</option>
												</select>
											</div>						
											
											<div class="form-group hidediv" id="addcrime" style="display:none">
												<div class="form-group">
													<div id="">
														<div><input class="form-control" type="text" name="subcrime" id="subcrime" placeholder="ENTER SUB CRIME" ></div>
													</div>								
												</div>									
													
												<div class="form-group text-center">
													<input type="button" id="addbutton" class="btn btn-info" value="Add"/>
												</div>							
												
												<div class="form-group">
													<div id="InputsWrapper" style="display:none">
														<div><input class="form-control" type="text" name="subCrimeArray" id="input" placeholder="SELECTED SUB CRIME"></div>
													</div>
												</div>
											</div>
										</div>
									   
										
										<div class="form-group col-xs-12 text-center">
											<button type="submit" class="btn btn-primary" name="btn-login" id="btn-login">
											  <span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit
										   </button> 
										</div>  
									  
									</form>
								
								</div>			
							</div>			
						</div>
					</div>	
					<div class=" col-lg-3">
					
						<!-------------
							<div class="panel-group align-middle"  style="font-size: 12px;">
								<div class="panel panel-primary">
									<div class="panel-heading text-left	">
										Bulk Insert
									</div>
									<div class="panel-body" style=" min-height:255px;">												
										<br/>
										<br/>
										<br/>
										<br/>
										<form name="fileupload" id="fileupload" action="<?php echo base_url('Admin/crimeupload');?>" method="post" enctype="multipart/form-data">
											
											<div class="search_bar text-center">				
												<label >
													Upload crime data file : 
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
								</div>			
							</div>
						-------------->
						
					</div>
				

				</div>			
			</div>	
		</div>	
	</div>	
</div>

<script>
 $(function() {
        $('#reqtype').change(function(){
            $('.hidediv').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>