<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyDEnxxE5FWnHUpysEiSY66otdas6O5bYNc"></script>

		<style type="text/css">
			#map {

				min-height: 500px;
			}

			.btn-file {

				position: relative;
				overflow: hidden;
			}

			.btn-file input[type=file] {

				position: absolute;
				top: 0;
				right: 0;
				min-width: 100%;
				min-height: 100%;
				font-size: 100px;
				text-align: right;
				filter: alpha(opacity=0);
				opacity: 0;
				outline: none;
				background: white;
				cursor: inherit;
				display: block;
			}

			.infownd {
				text-align: left;
			}
		</style>

		<script type="text/javascript">

		<?php if (isset($dataok) && $dataok == 0) { ?>
		
			var option = <?php echo $data; ?>;

		<?php } else { ?>
			var option = {
				"main": {
					"center": [23.7276711,90.4105872]
				},
				"data": []
			};
		<?php } ?>

		</script>
		
<div class="button_bar">
	<button class="btn btn-default"><a href="<?php echo base_url('CellTriangulation/operator');?>">OPERATOR/CELLID</a></button>
	<button class="btn btn-default"><a href="<?php echo base_url('CellTriangulation/crimescene');?>">CRIME SCENE/CELLID</a></button>
</div>

<div class="search_bar">
	<div class="row">
		<form class="form-group">
			<div class="col-lg-offset-2">
				<div class="form-group col-lg-4">
					OPERATOR: <input type="text" class="btn" id="usr">
				</div>
				<div class="form-group col-lg-4">
					CELLID: <input type="text" class="btn" id="usr">
				</div>
				<button type="submit" class="btn btn-default">+ ADD</button>
			</div>
		</form>
	</div>
	<div class="row text-center">
		<div class="row title text-center" style="margin:2% 0%;">
			Search by
		</div>
		<div class="row" style="margin-bottom:1%">
			<div class="col-lg-6 text-right">
				<div class="col-lg-offset-10 text-center">
						OPERATOR 
				</div>
			</div>
			<div class="col-lg-6 text-left">
				<div class="col-lg-2 text-center">
						CELLID 
				</div>	
			</div>						
		</div>
		<div class="row" style="padding-bottom:1%;">
			<div class="col-lg-6 text-right">
				<div class="col-lg-offset-10 text-center">
						AIRTEL
				</div>					 
			</div>
			<div class="col-lg-6 text-left">
				<div class="col-lg-2 text-center">
						100899 
				</div>	
			</div>					
		</div>
		<div class="row" style="padding-bottom:1%;">
			<div class="col-lg-6 text-right">
				<div class="col-lg-offset-10 text-center">
						GP 
				</div>					 
			</div>
			<div class="col-lg-6 text-left">
				<div class="col-lg-2 text-center">
						100899 
				</div>	
			</div>					
		</div>
				
		<div class="row text-center">
			<button type="submit" class="btn btn-default">Search</button>
		</div>
	</div>
	
</div>


<div class="content">
	<?php if (isset($dataok) && $dataok != 0) { ?>
		<div class="alert alert-warning alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Processing error!</strong> There was an error processing the uploaded file. Valid JSON Needed.
		</div>
		<?php } ?>

		<div class="header clearfix">
			<h3 class="text-muted">GSM Location Viewer</h3>
		</div>

		<div id="map" class="jumbotron" >
		</div>

		<div id="finder" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Find BTS Site</h4>
					</div>
			
					<div class="modal-body">
						<div class="form-group">
							<label for="bts-name" class="form-control-label">BTS Name:</label>
							<input type="text" class="form-control" id="bts-name">
						</div>
					</div>
					<div class="modal-footer">
						<button id="btn-find" type="button" class="btn btn-default" data-dismiss="modal">Find</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>

			</div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="<?php echo base_url('assets/bs/js/bs.js')?>"></script>
		<script src="<?php echo base_url('assets/bs/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('assets/bs/js/iehack.js')?>"></script>

		<script type="text/javascript">

			$(document).ready(function() {
				
				window.addEventListener("keydown", function (e) {

					if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 70)) { 

						e.preventDefault();
						$("#finder").modal();
					}
				});

				$("#finder").on("shown.bs.modal", function(){

					$("#bts-name").focus();
				});

				$("#btn-find").on("click", function(){

					for (var x = 0; x < slist.length; x++)
					{
						if (slist[x].name == $("#bts-name").val())
							slist[x].focus();
					}
				});
			});
		</script>
</div>