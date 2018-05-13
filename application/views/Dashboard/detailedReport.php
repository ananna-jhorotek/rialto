<style>
tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
      <h1>Detailed Report</h1>      
    </section>
	
		<section class="content">
        <div class="row">              
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                    </div> 
                    <div class="box-body">

						
						<input type="hidden" value="<?php //echo $cd_uer_id ;?>" name="userId" >

						<div class="form-body">
							<div class="col-md-4">
								<div class="form-group" id="filter_col2" data-column="1">
									<label class="control-label">Mobile Number :</label>
									<input type="text" value="<?php echo set_value('contact')?>" name="contact" class="form-control input-large column_filter" id="col1_filter" placeholder="Enter phone number">

									<?php echo form_error('contact',"<p class='text-danger'>","</p>")?>
								</div>
								
								<div class="form-group" id="filter_col3" data-column="2">
									<label class="control-label">Requested for :</label>
										<select class="form-control input-large column_filter" id="col2_filter">
										  <option value="">[== Select One ==]</option>
											<?php
											$this->db->select('distinct(id), name');
											$users = $this->db->get('users')->result_array();
											foreach($users as $user)
											{
											?>
												<option value="<?php echo $user['id'];?>"><?php echo $user['name'];?></option>

											<?php
										   }
											?>
											</select>
									<?php echo form_error('contact',"<p class='text-danger'>","</p>")?>
								</div>		

								<div class="form-group" id="filter_col4" data-column="3">
									<label class="control-label">Battalion :</label>
										<select class="form-control input-large column_filter" id="col3_filter">
										  <option value="">[== Select One ==]</option>
											<?php
											$this->db->select('distinct(battalions_id), battalion');
											$battalions = $this->db->get('battalions')->result_array();
											foreach($battalions as $battalion)
											{
											?>
												<option value="<?php echo $battalion['battalions_id'];?>"><?php echo $battalion['battalion'];?></option>

											<?php
										   }
											?>
											</select>
									<?php echo form_error('contact',"<p class='text-danger'>","</p>")?>
								</div>										

							</div>

							<div class="col-md-4">

								<div class="form-group" id="filter_col6" data-column="7">
									<label class="control-label">Date Created :</label>
									<input type="text" value="<?php echo set_value('contact')?>" name="contact" class="form-control input-large column_filter" id="col7_filter" placeholder="Enter Date">

									<?php echo form_error('contact',"<p class='text-danger'>","</p>")?>
								</div>

								<!--div class="form-group">
									<label class="control-label">Date Range or Send Date</label>
									<div class="input-group input-large date-picker input-daterange"
										 data-date="10/11/2012" data-date-format="yyyy-mm-dd">
										<input type="text" value="<?php echo set_value('from')?>" class="form-control" name="from">
										<span class="input-group-addon"> to </span>
										<input type="text" value="<?php echo set_value('to')?>" class="form-control" name="to">
									</div>
									
								</div-->
								
								<div class="form-group" id="filter_col7" data-column="8">
									<label class="control-label">Status :</label>
										<select class="form-control input-large column_filter" id="col8_filter">
										  <option value="">[== Select One ==]</option>
											<?php
											$this->db->select('distinct(request_status)');
											$request_statuses = $this->db->get('tbl_req_mno_msisdn')->result_array();
											foreach($request_statuses as $request_status)
											{
											?>
												<option value="<?php echo $request_status['request_status'];?>"><?php echo $request_status['request_status'];?></option>

											<?php
										   }
											?>
											</select>
									<?php echo form_error('contact',"<p class='text-danger'>","</p>")?>
								</div>
																
																
								
							</div>
							
							<div class="col-md-4">
							
								<div class="form-group" id="filter_col9" data-column="10">
									<label class="control-label">Completed By :</label>
									<select class="form-control input-large column_filter" id="col10_filter">
									  <option value="">[== Select One ==]</option>
										<?php
										$this->db->select('distinct(id),name');
										$completed_by_users = $this->db->get('users')->result_array();
										foreach($completed_by_users as $completed_by_user)
										{
										?>
											<option value="<?php echo $completed_by_user['name'];?>"><?php echo $completed_by_user['name'];?></option>

										<?php
									   }
										?>
									</select>
									<?php echo form_error('contact',"<p class='text-danger'>","</p>")?>
								</div>
								<div class="form-group" id="filter_col10" data-column="11">
									<label class="control-label">Operator :</label>
									<select class="form-control input-large column_filter" id="col11_filter">
									  <option value="">[== Select One ==]</option>
										<?php
										$this->db->select('distinct(mno_operator)');
										$operators = $this->db->get('tbl_req_mno_msisdn')->result_array();
										foreach($operators as $operator)
										{
										?>
											<option value="<?php echo $operator['mno_operator'];?>"><?php echo $operator['mno_operator'];?></option>

										<?php
									   }
										?>
									</select>
									<?php echo form_error('contact',"<p class='text-danger'>","</p>")?>
								</div>
																		

							</div>
						</div>
						<!--div class="col-md-6">
							<div class="form-actions">
								<button type="submit" class="btn btn-danger">Search</button>
								<a href="<?php echo base_url('SMSLog/smsLogShow');?>"  class="btn btn-danger">Reset</a>
							</div>
						</div-->
						
					</div> 
                </div>                       
            </div>
        </div>
	</section>
	
	<!--section class="content">
        <div class="row">              
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                    </div> 
                    <div class="box-body">   
                        
                        <div class="table-responsive"> 
							<table cellpadding="3" cellspacing="0" border="0" style="width: 67%; margin: 0 auto 2em auto;">
								<thead>
									<tr>
										<th>Target</th>
										<th>Search text</th>
									</tr>
								</thead>
								<tbody>
									<tr id="filter_col1" data-column="0">
										<td>Column - Name</td>
										<td align="center"><input type="text" class="column_filter" id="col0_filter"></td>
									</tr>
									<tr id="filter_col2" data-column="1">
										<td>Column - Position</td>
										<td align="center"><input type="text" class="column_filter" id="col1_filter"></td>
									</tr>
									<tr id="filter_col3" data-column="2">
										<td>Column - Office</td>
										<td align="center"><input type="text" class="column_filter" id="col2_filter"></td>
									</tr>
									<tr id="filter_col4" data-column="3">
										<td>Column - Age</td>
										<td align="center"><input type="text" class="column_filter" id="col3_filter"></td>
									</tr>
									<tr id="filter_col5" data-column="4">
										<td>Column - Start date</td>
										<td align="center"><input type="text" class="column_filter" id="col4_filter"></td>
									</tr>									
									<tr id="filter_col6" data-column="5">
										<td>Column - Placement</td>
										<td align="center">
										<select class="column_filter" id="col5_filter">
										  <option value="">Select one</option>
										  <option value="RAB-1">RAB-1</option>
										  <option value="saab">Saab</option>
										  <option value="opel">Opel</option>
										  <option value="audi">Audi</option>
										</select>
										</td>
									</tr>
									<tr id="filter_col7" data-column="6">
										<td>Column - Salary</td>
										<td align="center"><input type="text" class="column_filter" id="col6_filter"></td>
									</tr>
								</tbody>
							</table>
                        </div>  
                    </div> 
                </div>                       
            </div>
        </div>
	</section-->
	
    <section class="content">
        <div class="row">              
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                    </div> 
                    <div class="box-body"> <!--avove lines are common for all table-->     
                        
                        <div class="table-responsive"> 
                            <table class="data-table table table-striped table-bordered" id="detailedReportTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>									
										<th><?= ucwords(str_replace("_", " ", 'sl no'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'target_number'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'requested_for'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'battalion'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'user_designation'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'user_appointment'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'user_placement'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'date_created'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'request_status'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'requested_by'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'completed_by'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'operator'));?></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i = 1; foreach ($user_list as $request): ?>
                                        <tr>
                                            <td align="center"><?= $i; ?></td>                                       
                                            <td align="center"><?= $request['msisdn']; ?></td>    
											<?php
											$query = $this->db->get_where('users', array('id' => $request['requested_for']));
											if ($query->num_rows() > 0) {
												$requested_for = $query->row()->name;
											}else{
												$requested_for = "";
											}
											?>
                                            <td align="center"><?= $requested_for; ?></td>
											<?php
											$query = $this->db->get_where('battalions', array('battalions_id' => $request['battalions_id']));
											if ($query->num_rows() > 0) {
												$battalion = $query->row()->battalion;
											}else{
												$battalion = "";
											}
											?>
                                            <td align="center"><?= $battalion ?></td>    
                                            <td align="center"><?= $request['user_designation']; ?></td>    
                                            <td align="center"><?= $request['user_appointment']; ?></td>    
                                            <td align="center"><?= $request['user_placement']; ?></td>    
                                            <td align="center"><?= $request['createat']; ?></td>    
                                            <td align="center"><?= $request['request_status']; ?></td>    
                                            <td align="center"><?= $request['name']; ?></td>   
											<?php
											$query = $this->db->get_where('users', array('id' => $request['completed_by']));
											if ($query->num_rows() > 0) {
												$completed_by = $query->row()->name;
											}else{
												$completed_by = "";
											}
											?>
                                            <td align="center"><?= $completed_by;?></td>    
                                            <td align="center"><?= $request['mno_operator']; ?></td>    
                                        </tr>  
                                    <?php $i++; endforeach;?>                                                                   
                                </tbody>
								<!--tfoot>
                                    <tr>									
										<th><?= ucwords(str_replace("_", " ", 'sl no'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'target_number'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'requested_for'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'user_designation'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'user_appointment'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'user_placement'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'date_requested'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'request_status'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'requested_by'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'completed_by'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'operator'));?></th>
                                    </tr>
                                </tfoot-->       
                            </table>
                        </div>  
                    </div> 
                </div>                       
            </div>
        </div>
<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>   

<script> 
// $(document).ready(function() {
    // // Setup - add a text input to each footer cell
    // $('#detailedReportTable tfoot th').each( function () {
        // var title = $(this).text();
        // $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    // } );
 
    // // DataTable
    // var table = $('#detailedReportTable').DataTable();
 
    // // Apply the search
    // table.columns().every( function () {
        // var that = this;
 
        // $( 'input', this.footer() ).on( 'keyup change', function () {
            // if ( that.search() !== this.value ) {
                // that
                    // .search( this.value )
                    // .draw();
            // }
        // } );
    // } );
// } );
 
function filterColumn ( i ) {
    $('#detailedReportTable').DataTable().column( i ).search(
        $('#col'+i+'_filter').val()
    ).draw();
}
 
$(document).ready(function() {
    $('#detailedReportTable').DataTable();
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('div').attr('data-column') );
    } );
	
	$( "select.column_filter" ).change(function() {
	filterColumn( $('select.column_filter').parents('div').attr('data-column') );
	});
} );
</script>