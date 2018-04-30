<style>
    .left-inner-addon {
    position: relative;
}
.left-inner-addon input {
    padding-left: 28px;    
}
.left-inner-addon span {
    position: absolute;
    padding: 8px 5px;
    pointer-events: none;
}

.right-inner-addon {
    position: relative;
}
.right-inner-addon input {
    padding-right: 30px;    
}
.right-inner-addon span {
    position: absolute;
    right: 0px;
    padding: 7px 12px;
    pointer-events: none;
}
</style>


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
                                        <div class="left-inner-addon">
                                            <span style="font-weight: bold; font-size: 12px;">+88</span>
                                            <!--<input type="text" pattern="[789][0-9]{9}">-->                                            
                                            <input type="number" class="form-control" name="msisdn" id="msisdn"  placeholder="Enter mobile number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="warningdiv">
                                        <label>Operator</label>
                                        <input type="text" class="form-control" name="mno_operator" id="mno_operator" placeholder="Operator" required>
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
                                                    onSelect: function () {
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
                                                    onSelect: function () {
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

                                <div class="row">
                                    <?php
                                    $battalion = $this->session->userdata('battalion_id');
// var_dump($battalion);die;
                                    $role_id = $this->session->userdata('role_id');
                                    $user_id = $this->session->userdata('user_id');
                                    $get_authorized_officer = $this->db->select('is_authorized')->where('users.id', $user_id)->get('users')->row_array();
                                    $parentbattalion = $_SESSION['parentbattalion'];
                                    ?>  
                                    <b class="col-lg-12">Requested By
                                        <?php if ($get_authorized_officer['is_authorized'] == '1') { ?>                                             
                                            <span class="col-mid-1 pull-right">
                                                <input id="self_user" type="checkbox" value='1' data-battalion_id="<?= $battalion; ?>" data-role_id="<?= $role_id; ?>">
                                                <label>Self/User</label>
                                            </span> 
                                        <?php
                                        } else {
                                            
                                        }
                                        ?>
                                    </b> 
                                </div>  
                                <div class="row" id="default_data">
                                    <div class="col-md-6 ">	
                                        <label>Name</label>                                      
                                        <select class="form-control custom-select" name="requested_by" id="requested_by" required>
                                            <option value="">Please Select</option>
                                            <?php
                                            $parent_users = $this->db
                                                            ->where('users.battalions_id', $battalion)
                                                            ->where('users.id !=', $user_id)
                                                            ->where('is_authorized', '1')
                                                            ->get('users')->result_array();
                                            foreach ($parent_users as $parent):
                                                ?> 

                                                <option value="<?= $parent['id']; ?>"><?= $parent['name']; ?></option>
<?php endforeach; ?> 
                                        </select>
                                    </div>
                                    <div class="default">
                                        <div class="col-md-6">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" placeholder="Enter rank" name="user_designation"  required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Unit</label>
                                            <input type="text" class="form-control" placeholder="Enter apponitment" name="appointment"  required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Battalion</label>
                                            <input type="text" class="form-control" placeholder="Enter battalion" name="placement"  required>
                                        </div>    
                                    </div>
                                    <div class="selected_user_data_load">

                                    </div>

                                </div>


                                <div class="row" id="self_user_info" style="display: none;">

                                </div>



                                <br/>	
                                <div class="row ">
                                    <b class="col-lg-12">Investigation Refereence</b>
                                    <br/>	
                                    <br/>	
                                    <div class="col-md-6 ">
                                        <label>Crime Type</label>
                                        <select class="form-control custom-select" name="reason_crime_type" id="reason_crime_type" required>
                                            <option value="">Please Select</option>
                                            <?php
                                            $crime_types = $this->db
                                                            ->where('isactive', '1')
                                                            ->get('tbl_crimeinfo')->result_array();
                                            foreach ($crime_types as $crime_type):
                                                ?>                                                
                                                <option value="<?= $crime_type['id']; ?>"><?= $crime_type['crime_name']; ?></option>
<?php endforeach; ?> 
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Sub Type</label>
                                        <select class="form-control subcrime" name="reason_crime_subtype" id="reason_crime_subtype" required>

                                        </select>
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
                                                    <input  value="Submit" id="submit" class="btn btn-warning add_button">
                                                </div>
                                        </div>
									<div id="loading" class="col-md-12 text-center">
									</div> 
								  
							</div>

						</div>
					</div>
						
						
				</div>	
			</form>	
		</div>
	</div>
</div>
	


<script>
    $(document).ready(function () {
       $('body').on('change', '#self_user', function () {           
        var checkbox = $('#self_user:checked').val();            
        var battalion_id = $(this).data('battalion_id');
        var role_id = $(this).data('role_id');   
        
        if(checkbox == '1'){
            
            var url = '<?= site_url('reports/ajax_self_user_data'); ?>';
            $.ajax({
                    type : "post",
                    data : {'battalion_id' : battalion_id, 'role_id': role_id },
                    async : false,
                    dataType : "html",
                    url : url,
                    success : function (result) {
                        $('#default_data').hide();
                        $('#self_user_info').show();
                        $('#self_user_info').html(result);                        
                    },
                                   
                });
                
        }else{
           $.ajax({
                    type : "post",
                    data : {'battalion_id' : battalion_id, 'role_id': role_id },
                    async : false,
                    dataType : "html",
                    url : url,
                    success : function (result) {
                        $('#default_data').show();
                        $('#self_user_info').hide();                                
                    },
                                   
                });
        }
        });
           
    });
</script>
<script>
    $(document).ready(function () {
    $('body').on('change', '#requested_by', function () {
            var requested_by = $('#requested_by').val();
            
           var url = "<?= site_url('reports/requested_by_data'); ?>";
            $.ajax({
                type: "post",
                data: {'requested_by': requested_by},
                dataType: "html",
                url: url,
                success: function (result) {              
                    $('.selected_user_data_load').html(result);
                    $('.selected_user_data_load').show();
                    $('.default').hide();
                   
                },
            });
        });
    
      });
</script>

<script>
    $(document).ready(function () {
    $('body').on('change', '#reason_crime_type', function () {
           var crime_type = $('#reason_crime_type').val();            
           var url = "<?= site_url('reports/crime_wise_subcrime'); ?>";
            $.ajax({
                type: "post",
                data: {'crime_type': crime_type},
                dataType: "html",
                url: url,
                success: function (result) { 
                    $('.subcrime').show();    
                    $('.subcrime').html(result);
                                    
                   
                },
            });
        });
    
      });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#msisdn').keyup(function (e) {       
            
            var phone = $('#msisdn').val();
            if(phone == '017' || phone == '+88017'){
                $('#mno_operator').val('GRAMEENPHONE');
            }else if(phone == '019' || phone == '+88019'){
                $('#mno_operator').val('BANGLALINK');
            }else if(phone == '018' || phone == '+88018'){
                $('#mno_operator').val('ROBI');
            }else if(phone == '016' || phone == '+88016'){
                $('#mno_operator').val('AIRTEL');
            }else if(phone == '015' || phone == '+88015'){
                $('#mno_operator').val('TELETALK');
            } 
            else if(phone == ''){
                $('#mno_operator').val('Please Write Your Target Number');                              
                
            } 
        })
    });
</script>

<script>
    $(document).ready(function () {    
    $('body').on('click', '#submit', function () {
            var cdr_voice_sms = $('#cdr_voice_sms:checked').val(); 
            var gprs_data = $('#gprs_data:checked').val();
            var ipdr = $('#ipdr:checked').val();
            var info_ussd = $('#info_ussd:checked').val();
            var recharge = $('#recharge:checked').val();
            var used_imei = $('#used_imei:checked').val();
            var info_fnf = $('#info_fnf:checked').val();
            var info_demographic = $('#info_demographic:checked').val();
            var nid_pp = $('#nid_pp:checked').val();
            var registration = $('#registration:checked').val();
            var info_subs = $('#info_subs:checked').val();
            var info_scaned_pp = $('#info_scaned_pp:checked').val();
            var info_mfs = $('#info_mfs:checked').val();
                        
            if (cdr_voice_sms == 'Y') {
                var cdr_voice_sms = 'Y';                
            } else {
                var cdr_voice_sms = 'N';                       
            } 
            if (gprs_data == 'Y') {
                var gprs_data = 'Y';                
            } else {
                var gprs_data = 'N';                       
            } 
            if (ipdr == 'Y') {
                var ipdr = 'Y';                
            } else {
                var ipdr = 'N';                       
            }
            if (info_ussd == 'Y') {
                var info_ussd = 'Y';                
            } else {
                var info_ussd = 'N';                       
            } 
            
            if (recharge == 'Y') {
                var recharge = 'Y';                
            } else {
                var recharge = 'N';                       
            } 
            
            if (used_imei == 'Y') {
                var used_imei = 'Y';                
            } else {
                var used_imei = 'N';                       
            } 
            
            if (info_fnf == 'Y') {
                var info_fnf = 'Y';                
            } else {
                var info_fnf = 'N';                       
            } 
            if (info_demographic == 'Y') {
                var info_demographic = 'Y';                
            } else {
                var info_demographic = 'N';                       
            }
            
             if (nid_pp == 'Y') {
                var nid_pp = 'Y';                
            } else {
                var nid_pp = 'N';                       
            }
            
             if (registration == 'Y') {
                var registration = 'Y';                
            } else {
                var registration = 'N';                       
            }
            
             if (info_subs == 'Y') {
                var info_subs = 'Y';                
            } else {
                var info_subs = 'N';                       
            }
            
            if (info_scaned_pp == 'Y') {
                var info_scaned_pp = 'Y';                
            } else {
                var info_scaned_pp = 'N';                       
            }            
            if (info_mfs == 'Y') {
                var info_mfs = 'Y';                
            } else {
                var info_mfs = 'N';                       
            }
            var msisdn = $('#msisdn').val();
            var mno_operator = $('#mno_operator').val();
            var date_start = $('#date_start').val();
            var date_end = $('#date_end').val();
            var requested_by = $('#requested_by').val(); 
            
            var user_designation = $('#user_designation').val(); 
            var unit = $('#unit').val();
            var battalion = $('#battalion').val(); 
             
            var reason_crime_type = $('#reason_crime_type').val();
            var reason_crime_subtype = $('#reason_crime_subtype').val();
            var remarks_reference = $('#remarks_reference').val();
            
            
            if (msisdn == null || msisdn == "") {
                $("#msisdn").addClass("input-danger");
            }
            if (msisdn == null || msisdn == "") {
                alert("Please Fill Out The Phone Number Field");
                return false;
            }
            
            if (date_start == null || date_start == "") {
                $("#date_start").addClass("input-danger");
            }
            if (date_start == null || date_start == "") {
                alert("Please Fill Out The Date Range");
                return false;
            }if (date_end == null || date_end == "") {
                $("#date_end").addClass("input-danger");
            }
            if (date_end == null || date_end == "") {
                alert("Please Fill Out The Date Range");
                return false;
            }if (reason_crime_type == null || reason_crime_type == "") {
                $("#reason_crime_type").addClass("input-danger");
            }
            if (reason_crime_type == null || reason_crime_type == "") {
                alert("Please Fill Out The Crime Type");
                return false;
            }if (reason_crime_subtype == null || reason_crime_subtype == "") {
                $("#reason_crime_subtype").addClass("input-danger");
            }
            if (reason_crime_subtype == null || reason_crime_subtype == "") {
                alert("Please Fill Out The Sub Crime Type");
                return false;
            }if (remarks_reference == null || remarks_reference == "") {
                $("#remarks_reference").addClass("input-danger");
            }
            if (remarks_reference == null || remarks_reference == "") {
                alert("Please Fill Out The Vendor Field");
                return false;    
                
            } else {
               
                $.ajax({
                    type: 'post',
                    data: {'msisdn': msisdn, 'mno_operator': mno_operator, 'date_start': date_start, 'date_end': date_end,
                            'requested_by': requested_by, 'reason_crime_type': reason_crime_type, 'reason_crime_subtype': reason_crime_subtype,
                            'remarks_reference': remarks_reference,'cdr_voice_sms': cdr_voice_sms,'gprs_data': gprs_data,'ipdr': ipdr,
                            'info_ussd': info_ussd,'recharge': recharge,'used_imei': used_imei,'info_fnf': info_fnf,
                            'info_demographic': info_demographic,'nid_pp': nid_pp,'registration': registration,'info_subs': info_subs,
                            'info_scaned_pp': info_scaned_pp,'info_mfs': info_mfs, 'user_designation': user_designation, 'unit': unit, 
                             'battalion': battalion},
                    dataType: 'html',
                    async: false,
                    url: "<?= site_url('reports/save_request_info'); ?>",
                    success: function (data)
                    {                       
                         window.location.replace("<?= site_url('infoRequest/index'); ?>");                        
                    }
                });
            }
        });
     
            $("input, textarea").focus(function () {
                $(this).removeClass("input-danger");
            });
     });
</script>