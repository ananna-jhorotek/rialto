
<div class="button_bar">
	<button class="btn btn-default"><a href="<?php echo base_url('InfoRequest/operator');?>">OPERATOR</a></button>
	<button class="btn btn-default"><a href="<?php echo base_url('InfoRequest/mfs');?>">MFS PROVIDER</a></button>
	<button class="btn btn-default"><a href="<?php echo base_url('InfoRequest/myrequest');?>">MY REQUEST</a></button>
</div>
<div class="search_bar">
	<div class="row">
		<form class="form-group">
			<div class="row">
				<div class="col-lg-offset-2 text-right">
					<div class="form-group col-lg-5">
						MOBILE NUMBER: <input type="text" class="btn" id="usr">
					</div>
					<div class="form-group col-lg-5">
						OPERATOR: <input type="text" class="btn" id="usr">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-offset-2 text-right">
					<div class="form-group col-lg-5">
						START DATE: <input type="text" class="btn" id="usr">
					</div>
					<div class="form-group col-lg-5">
						END DATE: <input type="text" class="btn" id="usr">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-offset-2 text-right">
					<div class="form-group col-lg-2">
						REASON/REFERENCE: 
					</div>
					<div class="form-group col-lg-8">
						<textarea type="text" class="btn col-lg-12" id="usr"></textarea>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-offset-2 text-right">
					<div class="form-group col-lg-5" style="border:1px solid #CCC">
						<div class="col-lg-8 text-left">
							VOICE CALL: 
						</div>
						<div class="col-lg-4 text-right">
							<input type="checkbox">
						</div>
						<div class="col-lg-8 text-left">
							SMS: 
						</div>
						<div class="col-lg-4 text-right">
							<input type="checkbox">
						</div>
						<div class="col-lg-8 text-left">
							MMS: 
						</div>
						<div class="col-lg-4 text-right">
							<input type="checkbox">
						</div>
						<div class="col-lg-8 text-left">
							GPRS: 
						</div>
						<div class="col-lg-4 text-right">
							<input type="checkbox">
						</div>
						<div class="col-lg-8 text-left">
							RECHARGE/PAYMENTS: 
						</div>
						<div class="col-lg-4 text-right">
							<input type="checkbox">
						</div>
						<div class="col-lg-8 text-left">
							USSD IMEI: 
						</div>
						<div class="col-lg-4 text-right">
							<input type="checkbox">
						</div>
						<div class="col-lg-8 text-left">
							ASSAIGNED IPDB: 
						</div>
						<div class="col-lg-4 text-right">
							<input type="checkbox">
						</div>
						<div class="col-lg-8 text-left">
							VISITED WEBSITE: 
						</div>
						<div class="col-lg-4 text-right">
							<input type="checkbox">
						</div>
					</div>
					<div class="form-group col-lg-1">
					</div>
					<div class="form-group col-lg-5" style="border:1px solid #CCC">
						<div class="row">
							<div class="col-lg-8 text-left">
								SUBSCRIPTION: 
							</div>
							<div class="col-lg-4 text-right">
								<input type="checkbox">
							</div>
							<div class="col-lg-8 text-left">
								DE-REGISTRATION: 
							</div>
							<div class="col-lg-4 text-right">
								<input type="checkbox">
							</div>
							<div class="col-lg-8 text-left">
								WEB CARE REGISTRATION: 
							</div>
							<div class="col-lg-4 text-right">
								<input type="checkbox">
							</div>
							<div class="col-lg-8 text-left">
								DEMOGRAPHIC INFO: 
							</div>
							<div class="col-lg-4 text-right">
								<input type="checkbox">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="row text-center">
		<div class="row text-center">
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
	</div>
	
</div>