
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
<!--                    Dashboard-->
                    <!--<small>Control panel</small>-->
                </h1>
<!--                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>-->
            </section>
        <div class="row">
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-blue-active">
              <div class="inner">
                  <?php $general_request_number = $this->db
                                                    ->where('request_status', 'New')
                                                    ->where('date_requested', date('Y-m-d'))                                                    
                                                    ->where('general_type', 1)
                                                    ->where('is_approved', 0)
                                                    // ->where('battalions_id', $this->session->userdata('battalion_id'))
                                                    ->get('tbl_req_mno_msisdn')
                                                    ->num_rows(); ?>                  
                  <?php $special_request_number = $this->db
                                                    ->where('request_status', 'New')
                                                    ->where('date_requested', date('Y-m-d'))                                                    
                                                    ->where('special', 1)
                                                    ->where('is_approved', 1)
                                                    // ->where('battalions_id', $this->session->userdata('battalion_id'))
                                                    ->get('tbl_req_mno_msisdn')
                                                    ->num_rows();?>
                  <?php $total_new = $general_request_number+$special_request_number; ?>                  
                  <h3> <?= $total_new; ?> </h3>
                  <p>New Request</p>
              </div>
            <div class="icon">
              <i class="fa fa-users fa-1x" style="margin-top: 19px;"></i>
            </div>
            <a href="<?= site_url('SuperRequestProvider/new_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-red-active">
            <div class="inner">
                <?php $pending_request_number = $this->db
                                                        ->where('request_status', 'new')
                                                        ->where('date_requested <', date('Y-m-d'))
                                                        ->where('general_type', 1)
                                                        // ->where('battalions_id', $this->session->userdata('battalion_id'))
                                                        ->get('tbl_req_mno_msisdn')
                                                        ->num_rows(); ?>                  
                <?php $special_pending_request_number = $this->db
                                                    ->where('request_status', 'New')
                                                    ->where('date_requested <', date('Y-m-d'))                                                    
                                                    ->where('special', 1)
                                                    ->where('is_approved', 1)
                                                    // ->where('battalions_id', $this->session->userdata('battalion_id'))
                                                    ->get('tbl_req_mno_msisdn')
                                                    ->num_rows();?>
                  <?php $total_pending = $pending_request_number+$special_pending_request_number; ?>               
              <h3><?= $total_pending;?><sup style="font-size: 20px"></sup></h3>
              <p>Pending Request</p>
            </div>
            <div class="icon">
              <i class="fa fa-bell-slash-o" style="margin-top: 19px;"></i>
            </div>
            <a href="<?= site_url('SuperRequestProvider/pending_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php $completed_request_number = $this->db
                                                        ->where('request_status', 'completed')
                                                        ->where('completed_by', $this->session->userdata('user_id'))
                                                        ->get('tbl_req_mno_msisdn')
                                                        ->num_rows(); ?>
              <h3><?= $completed_request_number;?></h3>

              <p>Completed Request</p>
            </div>
            <div class="icon">
              <i class="fa fa-bell" style="margin-top: 19px;"></i>
            </div>
            <a href="<?= site_url('SuperRequestProvider/completed_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div>
            
            
  
        </div><!-- /.content-wrapper -->
<!--        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                
            </div>
           <strong>Copyright &copy; 2013-2018 <a href="http://jhorotek.com">JhoroTek</a>.</strong> All rights reserved.
        </footer>-->
    </div><!-- ./wrapper -->
        
        
    
    
    <script src="<?= base_url('assets/js/app.min.js');?>"></script>
    <script src="<?= base_url('assets/js/demo.js');?>"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="<?php echo base_url('assets/js/typeahead.js')?>"></script>
  </body>
</html>
                        
                        
                        
                        
                                
                        
                        
