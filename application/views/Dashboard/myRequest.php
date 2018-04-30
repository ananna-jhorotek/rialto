<div class="content-wrapper">
    <section class="content-header">
      <h1>My Request</h1>      
    </section>
    <section class="content">
        <div class="row">              
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                    </div> 
                    <div class="box-body"> <!--avove lines are common for all table-->     
                        
                        <div class="table-responsive"> 
                            <table class="data-table table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><?= ucwords(str_replace("_", " ", 'request_id'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'requested_by'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'user_designation'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'user_appointment'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'user_placement'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'date_requested'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'mno_operator'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'date_start'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'date_end'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'requested_by'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'designation'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'appointment'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'reason_crime_type'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'reason_crime_subtype'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'remarks_reference'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'cdr_voice_sms'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'gprs_data'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'ipdr'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'info_ussd'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'recharge'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'used_imei'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'info_fnf'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'info_demographic'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'nid_pp'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'registration'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'info_subs'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'info_scaned_pp'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'info_mfs'));?></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i = 1; foreach ($user_list as $request): ?>
                                        <tr>
                                            <td align="center"><?php echo $i; ?></td>
                                            <td align="center"><?= $request['requested_by']; ?></td>                                        
                                            <td align="center"><?= $request['user_designation']; ?></td>    
                                            <td align="center"><?= $request['user_appointment']; ?></td>    
                                            <td align="center"><?= $request['user_placement']; ?></td>    
                                            <td align="center"><?= $request['date_requested']; ?></td>    
                                            <td align="center"><?= $request['mno_operator']; ?></td>    
                                            <td align="center"><?= $request['date_start']; ?></td>    
                                            <td align="center"><?= $request['date_end']; ?></td>    
                                            <td align="center"><?= $request['requested_by']; ?></td>
                                            <td align="center"><?= $request['user_designation']; ?></td>
                                            <td align="center"><?= $request['user_appointment']; ?></td>
                                            <td align="center"><?= $request['reason_crime_type']; ?></td>
                                            <td align="center"><?= $request['reason_crime_subtype']; ?></td>
                                            <td align="center"><?= $request['remarks_reference']; ?></td>
                                            <td align="center"><?= $request['cdr_voice_sms']; ?></td>
                                            <td align="center"><?= $request['gprs_data']; ?></td>
                                            <td align="center"><?= $request['ipdr']; ?></td>
                                            <td align="center"><?= $request['info_ussd']; ?></td>
                                            <td align="center"><?= $request['recharge']; ?></td>
                                            <td align="center"><?= $request['used_imei']; ?></td>
                                            <td align="center"><?= $request['info_fnf']; ?></td>
                                            <td align="center"><?= $request['info_demographic']; ?></td>
                                            <td align="center"><?= $request['nid_pp']; ?></td>
                                            <td align="center"><?= $request['registration']; ?></td>
                                            <td align="center"><?= $request['info_subs']; ?></td>
                                            <td align="center"><?= $request['info_scaned_pp']; ?></td>
                                            <td align="center"><?= $request['info_mfs']; ?></td>
                                        </tr>  
                                    <?php $i++; endforeach;?>                                                                   
                                </tbody>
                            </table>
                        </div>  
                    </div> 
                </div>                       
            </div>
        </div>
<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>   