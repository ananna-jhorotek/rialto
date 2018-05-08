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
                    <div class="box-body"> <!--avove lines are common for all table-->     
                        
                        <div class="table-responsive"> 
                            <table class="data-table table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
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
                                </thead>                                
                                <tbody>
                                    <?php $i = 1; foreach ($user_list as $request): ?>
                                        <tr>
                                            <td align="center"><?= $i; ?></td>                                       
                                            <td align="center"><?= $request['msisdn']; ?></td>    
                                            <td align="center"><?= $request['requested_for']; ?></td>    
                                            <td align="center"><?= $request['user_designation']; ?></td>    
                                            <td align="center"><?= $request['user_appointment']; ?></td>    
                                            <td align="center"><?= $request['user_placement']; ?></td>    
                                            <td align="center"><?= $request['createat']; ?></td>    
                                            <td align="center"><?= $request['request_status']; ?></td>    
                                            <td align="center"><?= $request['requested_by']; ?></td>    
                                            <td align="center"><?= $request['completed_by']; ?></td>    
                                            <td align="center"><?= $request['mno_operator']; ?></td>    
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