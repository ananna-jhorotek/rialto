<div class="content-wrapper">
    <section class="content-header">
      <h1>Request Logs</h1>      
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
										<th><?= ucwords(str_replace("_", " ", 'User'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'laccellid'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'bts'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'lac'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'thana'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'operator'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'request_for'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'requested_by'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'cellid'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'latitude'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'longitude'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'area_range'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'created_date'));?></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i = 1; foreach ($user_list as $request): ?>
                                        <tr>
                                            <td align="center"><?= $request['user_id']; ?></td>       
                                            <td align="center"><?= $request['laccellid']; ?></td>    
                                            <td align="center"><?= $request['bts']; ?></td>    
                                            <td align="center"><?= $request['lac']; ?></td>    
                                            <td align="center"><?= $request['thana']; ?></td>    
                                            <td align="center"><?= $request['operator']; ?></td>    
                                            <td align="center"><?= $request['request_for']; ?></td>    
                                            <td align="center"><?= $request['requested_by']; ?></td>    
                                            <td align="center"><?= $request['cellid']; ?></td>    
                                            <td align="center"><?= $request['latitude']; ?></td>    
                                            <td align="center"><?= $request['longitude']; ?></td>    
                                            <td align="center"><?= $request['area_range']; ?></td>    
                                            <td align="center"><?= $request['createat']; ?></td>    
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