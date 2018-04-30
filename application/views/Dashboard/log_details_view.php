<div class="content-wrapper">
    <section class="content-header">
          <h1>Activity List
              <!--<a href="<?= site_url('settings/create_menu')?>" class="btn btn-warning add-btn pull-right">Add New Menu</a>-->
          </h1>      
        </section>
      <section class="content">
          <div class="row">              
              <div class="col-xs-12">
                  <div class="box box-info">
                      <div class="box-header"></div>
                      <div class="box-body">  
                          <div class="table-responsive">
                              <table id="example" class=" data-table table table-striped table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                      <tr> 
                                        <th><center>Sl No</center></th>
                                        <th><center>Activity Type</center></th>
                                        <th><center>Activity Time</center></th>
                                        <th><center>Activity Details</center></th>
                                        <th><center>Prev Data</center></th>
                                        <th><center>Visited URL</center></th>  
                                        <th><center>User Type</center></th>  
                                        <th><center>Worked By</center></th>
                                        </tr>
                                </thead>                                
                                <tbody>
                                      <?php $i = 1; foreach ($log_details as $log): ?>
                                          <tr>
                                              <td><?php echo $i; ?></td>
                                              <td><?= $log['action_type']; ?></td> 
                                              <td><?= $log['action_time']; ?></td>                                      
                                              <td><?= $log['activity_details']; ?></td>  
                                              <td><?= $log['prev_log']; ?></td>  
                                              <td><?= $log['user_type']; ?></td>  
                                              <td><?= $log['activity_url']; ?></td>                                      
                                              <td><?= $log['user_name']; ?></td>                                                                                     
                                         </tr>  
                                     <?php $i++; endforeach; ?>                                                                   
                                  </tbody>
                              </table>
                          </div>                     
                      </div>
                  </div>
              </div>
          </div>


