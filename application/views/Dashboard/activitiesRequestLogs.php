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
										<th><?= ucwords(str_replace("_", " ", 'request_type'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'wing'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'request_url'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'date'));?></th>
										<th><?= ucwords(str_replace("_", " ", 'request_by'));?></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i = 1; foreach ($dataArray as $request): ?>
                                        <tr>
                                            <td align="center"><?= $request['request_type']; ?></td>                                       
                                            <td align="center"><?= $request['user_type']; ?></td>    
                                            <td align="center"><?= $request['request_url']; ?></td>    
                                            <td align="center"><?= $request['date']; ?></td>    
                                            <td align="center"><?= $request['request_by']; ?></td>
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