<?php
												// $parentbattalion = $_SESSION['parentbattalion'];
												// // $users = $this->db->where('battalions_id', $parentbattalion)->get('battalions')->result_array();
												// $users = $this->db->join('battalions', 'battalions.battalions_id=users.battalions_id','left')->where('battalions.battalions_id', $parentbattalion)->get('users')->result_array();
												// // foreach ($users as $user):
												// echo $this->db->last_query();
												// die;
												// print_r($menu);
												?> 

<!--- AutoComplete requested_by start--->
<script>
$(function() {
	
	$('#requested_by').bind('change keyup', function () {

		//get value of selected option
		var value = $(this).children("option:selected").attr('value');

		// do something here
		// alert(value);
		// console.log(data);
		var data = {"id":value};
		
		$.ajax({
			type: "POST",  
			url: "<?php echo site_url('Reports/getUserInfoAjax');?>",
			data: data,
			dataType: 'json', 
			success: function(data){
				// console.log(data);
				
				// document.getElementById('requested_by').value = data.name;
				document.getElementById('user_designation').value = data.rank;
				document.getElementById('appointment').value = data.apt_name;
				document.getElementById('placement').value = data.battalion;
				
			},
			error: function(data){		
				// console.log(data);			
				document.getElementById('user_designation').value = '';
				document.getElementById('appointment').value = '';
				document.getElementById('placement').value = '';
			}      
		});

	}).change();
    
});
</script>
<!--- AutoComplete requested_by End--->

<script>
$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }
    
    $( "#reason_crime_type" ).bind( "keydown", function( event ) {
		
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 1,
        source: function( request, response ) {
            // delegate back to autocomplete, but extract the last term
            $.getJSON("crimeInfoAjax.php", { term : extractLast( request.term )},response);
        },
        focus: function() {
            // prevent value inserted on focus
            return false;
        },
        select: function( event, ui ) {
			// $("#NameInput").val( ui.item.value );
          // $('#HiddenUserID').val( ui.item.id );
            var terms = split( this.value );
            // remove the current input
            terms.pop();
            // add the selected item
            terms.push( ui.item.value );
            // add placeholder to get the comma-and-space at the end
            terms.push( "" );
            this.value = terms.join( "" );
			
			
			var data = {"name":ui.item.value,"id":ui.item.id};
			
			document.getElementById('hiddenCrimeTypeId').value = ui.item.id;
			
			// console.log(data);
			// alert('LOL');
			// $.ajax({
				// type: "POST",  
				// url: "<?php echo site_url('Reports/getCrimeInfoAjax');?>",
				// data: data,
				// dataType: 'json', 
				// success: function(data){
					// // console.log(data.name);
					
					// document.getElementById('hiddenCrimeTypeId').value = data.id;
					
				// },
				// error: function(data){alert(data);}      
			// });
			
			return false;
        }
    });
});
</script>
<!--- AutoComplete requested_by End--->

<script>
$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }
    
    $( "#reason_crime_subtype" ).bind( "keydown", function( event ) {
		
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 1,
        source: function( request, response ) {
            // delegate back to autocomplete, but extract the last term			
			// var hiddenCrimeTypeId = document.getElementById('hiddenCrimeTypeId');
			var hiddenCrimeTypeId = $('#hiddenCrimeTypeId').val();
			
			// alert(hiddenCrimeTypeId);
			
            $.getJSON("subCrimeInfoAjax.php", { term : extractLast( request.term ), crimeid : hiddenCrimeTypeId},response);
        },
        focus: function() {
            // prevent value inserted on focus
            return false;
        },
        select: function( event, ui ) {
			// $("#NameInput").val( ui.item.value );
          // $('#HiddenUserID').val( ui.item.id );
            var terms = split( this.value );
            // remove the current input
            terms.pop();
            // add the selected item
            terms.push( ui.item.value );
            // add placeholder to get the comma-and-space at the end
            terms.push( "" );
            this.value = terms.join( "" );			
			var data = {"name":ui.item.value,"id":ui.item.id};			
			document.getElementById('hiddenSubCrimeTypeId').value = ui.item.id;
			
			// console.log(data);
			// alert('LOL Again');
			
			
            return false;
        }
    });
});
</script>
<!--- AutoComplete requested_by End--->



<script>

    var json;
    $(document).ready(function(){
	
	
	
		
	$("#form1").validate({
        rules: {
            msisdn: "required",
            mno_operator: "required",
            date_start: "required",
            date_end: "required",
            requested_by: "required",
            user_designation: "required",
            appointment: "required",
            placement: "required",
            reason_crime_type: "required",
            reason_crime_subtype: "required",
            remarks_reference: "required"
        },
        messages: {
            msisdn: "Please specify msisdn",
            mno_operator: "Please specify operator",
            date_start: "Please specify start date",
            date_end: "Please specify end date",
            requested_by: "Please specify requested by",
            user_designation: "Please specify user_designation",
            appointment: "Please specify appointment",
            placement: "Please specify placement",
            reason_crime_type: "Please specify reason crime type",
            reason_crime_subtype: "Please specify reason crime subtype",
            remarks_reference: "Please specify remarks reference"

        }
    })
		
	$('#self_user').on('click',function (){		
		
		// ------------Adding logs to BD------------
		var data = "123";
		$.ajax({
			type: "POST",  
			url: "<?php echo site_url('Reports/getUserInfo');?>",
			data: data,
			dataType: 'json', 
			success: function(data){
				// console.log(data);
				// alert(data);
				// var obj = JSON.parse(data);
				// console.log(obj);
				// document.getElementById("demo").innerHTML = obj.name + ", " + obj.age;
				// document.getElementById('name').value="";
				// var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}');
				// document.getElementById("demo").innerHTML = obj.name + ", " + obj.age;

				// console.log(data.name);
				// $('[name=requested_by] option').filter(function() { 
					// alert('LOL');
					// return ($(this).text() == 'LOL'); //To select Blue
				// }).prop('selected', true);
				
				// $('select[name="requested_by"]').val('Super Admin');
				
				$('#requested_by').append('<option value="foo" selected="selected">'+data.name+'</option>');

				// document.getElementById('requested_by').value = data.name;
				document.getElementById('user_designation').value = data.rank;
				document.getElementById('appointment').value = data.apt_name;
				document.getElementById('placement').value = data.battalion;
				
				
				// $returnArray['user_id'] = $user_id;
				// $returnArray['name'] = $name;
				// $returnArray['rank'] = $rank;
				// $returnArray['wing'] = $wing;
				// $returnArray['appointment'] = $appointment;
				// $returnArray['battalion'] = $battalion;
				// $returnArray['email'] = $email;
			},
			error: function(data){
				
				console.log(data);
			}
		});	
		// ------------Adding logs to BD------------
		
		
	})

    $('#submitInfoData').on('click',function (){
		
		
		// $("#form1").valid(); //validate form 1
		// $("#loading").html("<img src='<? echo site_url('assets/images/wait.gif');?>'>");
		
		if ($("#form1").valid()) {
			// do something here when the form is valid
			var dt = new Date();
			var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

			var msisdn = document.getElementById('msisdn').value;
			var mno_operator = document.getElementById('mno_operator').value;
			var date_start = document.getElementById('date_start').value + " " + time;
			var date_end = document.getElementById('date_end').value + " " + time;
			var self_user = document.getElementById('self_user').value;
			var requested_by = document.getElementById('requested_by').value;
			var user_designation = document.getElementById('user_designation').value;
			var appointment = document.getElementById('appointment').value;
			var placement = document.getElementById('placement').value;
			var reason_crime_type = document.getElementById('reason_crime_type').value;
			var reason_crime_subtype = document.getElementById('reason_crime_subtype').value;
			var remarks_reference = document.getElementById('remarks_reference').value;
			
			
			var cdr_voice_sms = $('input[id=cdr_voice_sms]').is(':checked');		
			var gprs_data = $('input[id=gprs_data]').is(':checked');
			var ipdr = $('input[id=ipdr]').is(':checked');
			var info_ussd = $('input[id=info_ussd]').is(':checked');
			var recharge = $('input[id=recharge]').is(':checked');
			var self_user = $('input[id=self_user]').is(':checked');
			var used_imei = $('input[id=used_imei]').is(':checked');
			var info_fnf = $('input[id=info_fnf]').is(':checked');
			var info_demographic = $('input[id=info_demographic]').is(':checked');
			var nid_pp = $('input[id=nid_pp]').is(':checked');
			var registration = $('input[id=registration]').is(':checked');
			var info_subs = $('input[id=info_subs]').is(':checked');
			var info_mfs = $('input[id=info_mfs]').is(':checked');
			var info_scaned_pp = $('input[id=info_scaned_pp]').is(':checked');
			
			
			
			if(cdr_voice_sms){
				var cdr_voice_sms = 'Y';
			}
			else
			{
				var cdr_voice_sms = 'N';
			}
			
			if(gprs_data){
				var gprs_data = 'Y';
			}
			else
			{
				var gprs_data = 'N';
			}
			
			if(ipdr){
				var ipdr = 'Y';
			}
			else
			{
				var ipdr = 'N';
			}
			
			if(info_ussd){
				var info_ussd = 'Y';
			}
			else
			{
				var info_ussd = 'N';
			}
			
			if(recharge){
				var recharge = 'Y';
			}
			else
			{
				var recharge = 'N';
			}
			
			if(used_imei){
				var used_imei = 'Y';
			}
			else
			{
				var used_imei = 'N';
			}
			
			if(info_fnf){
				var info_fnf = 'Y';
			}
			else
			{
				var info_fnf = 'N';
			}
			
			if(info_demographic){
				var info_demographic = 'Y';
			}
			else
			{
				var info_demographic = 'N';
			}
			
			if(nid_pp){
				var nid_pp = 'Y';
			}
			else
			{
				var nid_pp = 'N';
			}
			
			if(registration){
				var registration = 'Y';
			}
			else
			{
				var registration = 'N';
			}
			
			if(info_subs){
				var info_subs = 'Y';
			}
			else
			{
				var info_subs = 'N';
			}
			
			if(info_mfs){
				var info_mfs = 'Y';
			}
			else
			{
				var info_mfs = 'N';
			}
			
			
			if(info_scaned_pp){
				var info_scaned_pp = 'Y';
			}
			else{
				var info_scaned_pp = 'N';
			}
			
			var data = {'msisdn':msisdn, 'mno_operator':mno_operator , 'date_start':date_start , 'date_end':date_end , 'self_user':self_user , 'requested_by':requested_by , 'user_designation':user_designation , 'user_appointment':appointment , 'placement':placement , 'reason_crime_type':reason_crime_type , 'reason_crime_subtype':reason_crime_subtype , 'remarks_reference':remarks_reference , 'cdr_voice_sms':cdr_voice_sms , 'gprs_data':gprs_data , 'ipdr':ipdr , 'info_ussd':info_ussd , 'recharge':recharge , 'used_imei':used_imei , 'info_fnf':info_fnf , 'info_demographic':info_demographic , 'nid_pp':nid_pp , 'registration':registration , 'info_subs':info_subs , 'info_scaned_pp':info_scaned_pp , 'info_mfs':info_mfs};
			
			
			// console.log(data);
			// alert(data);
			//------------Adding logs to DB------------
			// var source_url = "123";
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('RequestLogs/storeLogs');?>",
				data: data,
				dataType: 'json',
				success: function(data){
				}
			});	
			//------------Adding logs to DB------------
			
			
					
			$.ajax({
				type: "POST",  
				url: "<?php echo site_url('InfoRequest/request');?>",
				data: data,
				dataType: 'json', 
				success: function(data)
				{
					// alert(data);
					// myData = JSON.stringify(data);
					// json = JSON.parse(myData);
					// console.log(data);
					
					$("#loading").html('<div class="alert alert-success"><strong>Success!</strong>LOL Request accepted successfully.</div>');
					// $("#loading").addClass('');
					
					$('#form1')[0].reset();
					
				
				},
				error: function(data){
					
					// alert(data);
					
					// $("#loading").html();
					$("#loading").html('<div class="alert alert-success"><strong>Success!</strong> Request accepted successfully.</div>');
					// // $("#loading").html('<div class="alert alert-success"><strong>Opps!</strong> Failed to accept request.</div>');
					
					// alert(data);
					// console.log(data);
					$('#self_user').attr('checked', false);
					$('#nid_pp').attr('checked', false);
					$('#msisdn').attr('checked', false);
					$('#mno_operator').attr('checked', false);
					$('#date_start').attr('checked', false);
					$('#date_end').attr('checked', false);
					$('#self_user').attr('checked', false);
					$('#requested_by').attr('checked', false);
					$('#user_designation').attr('checked', false);
					$('#appointment').attr('checked', false);
					$('#placement').attr('checked', false);
					$('#reason_crime_type').attr('checked', false);
					$('#reason_crime_subtype').attr('checked', false);
					$('#remarks_reference').attr('checked', false);
					$('#cdr_voice_sms').attr('checked', false);
					$('#gprs_data').attr('checked', false);
					$('#ipdr').attr('checked', false);
					$('#info_ussd').attr('checked', false);
					$('#recharge').attr('checked', false);
					$('#used_imei').attr('checked', false);
					$('#info_fnf').attr('checked', false);
					$('#info_demographic').attr('checked', false);
					$('#registration').attr('checked', false);
					$('#info_subs').attr('checked', false);
					$('#info_scaned_pp').attr('checked', false);
					$('#info_mfs').attr('checked', false);
					
					$('#form1')[0].reset();
				}        
			});
			
		}
		
		
	})
    });

	
</script>


<div class="col-lg-12">	
	<div class="panel-group"  style="font-size: 12px;">
		<div class="panel panel-primary">
			<div  class="panel-heading" id="mgs" style="text-transform:uppercase; background-color:#028547;">
				Info Request
			</div>
			<form method="post" id="form1">
				<div class="panel-body" style="">				
					<div class="col-lg-7">
						
						<div class="col-lg-12 well well-lg">
						
							<div class="" role="alert">
								<div class="row">
								
									<div class="col-md-6 ">					
										<label>Target Number</label>
										<input type="text" class="form-control" name="msisdn" id="msisdn" placeholder="Enter mobile number" required>
									</div>
									<div class="col-md-6">
										<label>Select Operator</label>
										<select class="form-control custom-select" name="mno_operator" id="mno_operator" required>
											<option value="">Please select operator:</option>
											<option value="BANGLALINK">BANGLALINK</option>
											<option value="ROBI">ROBI</option>
											<option value="GRAMEENPHONE">GRAMEENPHONE</option>
											<option value="AIRTEL">AIRTEL</option>
											<option value="TELETALK">TELETALK</option>
										</select>
									</div>
									<div class="col-md-6">
										<label>Start Date</label>
										<input  class="form-control" type="text" placeholder="Start date" name="date_start" id="date_start" required>    

										<script type="text/javascript">
											// When the document is ready
											$(document).ready(function () {		
											 $("#date_start").datepicker({
													showButtonPanel: true,
													dateFormat: 'yy-mm-dd',
													onSelect: function() {
														var dateObject = $('#date_start').datepicker().val();
														// alert(dateObject);
													}
											   });  
											});			
											
										</script>

									</div>
									<div class="col-md-6">
										<label>End Date</label>
										<input  class="form-control" type="text" placeholder="End date"  name="date_end" id="date_end" required>    



										<script type="text/javascript">
											// When the document is ready
											$(document).ready(function () {		
											 $("#date_end").datepicker({
													showButtonPanel: true,
													dateFormat: 'yy-mm-dd',
													onSelect: function() {
														var dateObject = $('#date_end').datepicker().val();
														// alert(dateObject);
													}
											   });  
											});			
											
										</script>
									</div>
								</div>		
								
								
								<input type="hidden" value=''>
								<br/>
								<div class="row ">
									<b class="col-lg-12">Requested By
									
									<?php
										if($_SESSION['role_type'] == 'Admin')
										{
									?>
										<span class="col-mid-1 pull-right">
											<input id="self_user" type="checkbox" value='1'>
											<label>Self/User</label>
										</span>
									<?php
										}
										else
										{
											
									?>
										<input id="self_user" type="hidden" value=''>
									<?php
										}
									?>
									</b>
									<div class="col-md-6 ">	
										<label>Name</label>
										
										<select class="form-control custom-select" name="requested_by" id="requested_by" required>
											<option value="">Please Select</option>
										
											
											<?php
												$parentbattalion = $_SESSION['parentbattalion'];
												// $users = $this->db->where('battalions_id', $parentbattalion)->get('battalions')->result_array();
												$users = $this->db->join('battalions', 'battalions.battalions_id=users.battalions_id','left')->where('battalions.battalions_id', $parentbattalion)->get('users')->result_array();
												foreach ($users as $user):												
												// print_r($menu);
											?> 
										
											<option value="<?= $user['id']; ?>"><?= $user['name']; ?></option>
									  
											<?php 
												endforeach; 
											?> 
									 
										</select>
									</div>
									<div class="col-md-6">
										<label>Rank</label>
										<input type="text" class="form-control" placeholder="Enter rank" name="user_designation" id="user_designation" required>
									</div>
									<div class="col-md-6">
										<label>Apponitment</label>
										<input type="text" class="form-control" placeholder="Enter apponitment" name="appointment" id="appointment" required>
									</div>
									<div class="col-md-6">
										<label>Battalion</label>
										<input type="text" class="form-control" placeholder="Enter battalion" name="placement" id="placement" required>
									</div>
								</div>

								<br/>	
								<div class="row ">
									<b class="col-lg-12">Investigation Refereence</b>
									<br/>	
									<br/>	
									<div class="col-md-6 ">
										<label>Crime Type</label>
										<input type="text" class="form-control " placeholder="Enter crime type" name="reason_crime_type" id="reason_crime_type" required>
									</div>
									
									<div class="col-md-6">
										<label>Sub Type</label>
										<input type="hidden" id="hiddenCrimeTypeId">
										<input type="hidden" id="hiddenSubCrimeTypeId">
										<input type="text" class="form-control" placeholder="Enter sub type" id="reason_crime_subtype">
									</div>
									
									<div class="col-md-12">
										<label>Additional Remarks</label>
										<Textarea class="form-control" placeholder="Enter Additional Remarks"  id="remarks_reference"></textarea>
									</div>
								</div>
							</div>
						  
						</div>
						
					</div>
					<div class="col-lg-5 pull-right">
						<div class="col-lg-12 well well-lg pull-right">
							<div class="" role="alert">
								<div class="row ">
									<b>Information Request For</b>
									<hr/>
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="checkbox" id="cdr_voice_sms" value="Y">
											<label for="checkbox100">Voice/SMS/MMS CDR</label>

										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="gprs_data" value="Y">
											<label for="checkbox100">GPRS/DATA CDR</label>

										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="ipdr" value="Y">
											<label for="checkbox100">IPDR</label>
										</div>
									</div>



									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="info_ussd" value="Y">
											<label for="checkbox100">USSD CDR</label>
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="recharge" value="Y">
											<label for="checkbox100">PAYMENT/RECHARGE</label>

										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="used_imei" value="Y">
											<label for="checkbox100">USSD IMEI</label>

										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="info_fnf" value="Y">
											<label for="checkbox100">CONFIGURED F & F</label>

										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="info_demographic" value="Y">
											<label for="checkbox100">DEMOGRAPHIC INFO</label>

										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="nid_pp" value="Y">
											<label for="checkbox100">USED NID/PP INFO</label>

										</div>
									</div>



									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="registration" value="Y">
											<label for="checkbox100">NID & REGISTRATION</label>

										</div>
									</div>



									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="info_subs" value="Y">
											<label for="checkbox100">SCANNED SUBSCRIPTION</label>

										</div>
									</div>



									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="info_scaned_pp" value="Y">
											<label for="checkbox100">SCANNED NID/PP</label>

										</div>
									</div>



									<div class="col-md-6">
										<div class="form-group">
											<input type="checkbox" id="info_mfs" value="Y">
											<label for="checkbox100">MFS TRANXS CDR</label>

										</div>
									</div>
							  
								</div>				
									
									
									
								  
								<div class="col-md-12 text-center">
									<div class="form-group">
										<span id="submitInfoData" class="btn btn-primary">Submit</span>
									</div>
								</div>
								<div id="loading" class="col-md-12 text-center"></div> 
								  
							</div>

						</div>
					</div>
						
						
				</div>	
			</form>	
		</div>
	</div>
</div>
	
	
</div>