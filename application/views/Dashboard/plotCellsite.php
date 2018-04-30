 <?php

	if (isset($_FILES["gsmdata"]))
	{
		$target_dir = "uploads/";

		$target_file = $target_dir . basename($_FILES["gsmdata"]["name"]);

		$dataok = 0;

		if ($_FILES["gsmdata"]["size"] > 2048000)
			$dataok = -1;

		if (move_uploaded_file($_FILES["gsmdata"]["tmp_name"], $target_file)) {

			if ($gsmdata = fopen($target_file, "r"))
			{
				$data = fread($gsmdata, filesize($target_file));
				fclose($gsmdata);

				if (json_decode($data) === NULL)
					$dataok = -3;
			} else {
				$dataok = -2;
			}
		}
	}
?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyDEnxxE5FWnHUpysEiSY66otdas6O5bYNc"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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
	<button class="btn btn-default">Grameenphone</button>
	<button class="btn btn-default">ROBI</button>
	<button class="btn btn-default">BANGLALINK</button>
	<button class="btn btn-default">AIRTEL</button>
	<button class="btn btn-default">TELETALK</button>
</div>
<div class="search_bar">
	<form class="form-horizontal" method="POST" action="<?php echo site_url('PlottedCellsite/plotCellsite')?>">
		<div class="form-group col-lg-4">
			SITEID: <input type="number" class="btn" name="siteid" id="siteid">
			 <?php echo form_error('siteid',"<p class='text-danger'>","</p>")?>
		</div>
		<div class="form-group col-lg-4">
			CELLID: <input type="number" class="btn" name="cellid" id="cellid">
			<?php echo form_error('cellid',"<p class='text-danger'>","</p>")?>
		</div>
		<div class="form-group col-lg-3">
			AREA: <input type="text" class="btn" name="area" id="area">
			<?php echo form_error('area',"<p class='text-danger'>","</p>")?>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
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

		<footer class="footer">
			<form name="fileupload" id="fileupload" action="index.php" method="post" enctype="multipart/form-data">
			<label class="btn btn-default btn-file">
				Browse <input id="gsmdata" name="gsmdata" type="file" style="display: none;">
			</label>
			</form>
		</footer>


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