
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
                <div class="col-lg-3 col-xs-3">
                    <!-- small box -->
                    <div class="small-box bg-blue-active">
                        <div class="inner">
                            <?php
                            $new_request_number = $this->db
                                                        ->where('request_status', 'New')
                                                        ->where('date_requested', date('Y-m-d'))
                                                        ->where('general_type', 1)
                                                        ->where('special', 0)
                                                        ->where('is_approved', 0)
                                                        ->get('tbl_req_mno_msisdn')
                                                        ->num_rows();
                            ?> 
                            <h3> <?= $new_request_number; ?> </h3>
                            <p>New Request</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users fa-1x" style="margin-top: 19px;"></i>
                        </div>
                        <a href="<?= site_url('super_admin/new_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-3">
                    <!-- small box -->
                    <div class="small-box bg-red-active">
                        <div class="inner">
                            <?php
                            $pending_request_number = $this->db
                                    ->where('request_status', 'New')
                                    ->where('date_requested <', date('Y-m-d'))
                                    ->where('general_type', 1)
                                    ->where('special', 0)
                                    ->where('is_approved', 0)
                                    ->get('tbl_req_mno_msisdn')
                                    ->num_rows();
                            ?> 
                            <h3><?= $pending_request_number; ?><sup style="font-size: 20px"></sup></h3>
                            <p>Pending Request</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-product-hunt" style="margin-top: 19px;"></i>
                        </div>
                        <a href="<?= site_url('admin/pending_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-3">
                    <!-- small box -->
                    <div class="small-box bg-aqua-active">
                        <div class="inner">
                            <?php
                            $completed_request_number = $this->db
                                    ->where('request_status', 'completed')
                                    ->get('tbl_req_mno_msisdn')
                                    ->num_rows();
                            ?>
                            <h3><?= $completed_request_number; ?></h3>
                            <p>Completed Request</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-bell-slash-o" style="margin-top: 19px;"></i>
                        </div>
                        <a href="<?= site_url('admin/completed_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-3">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <?php
                            $new_request_number = $this->db
                                    ->where('request_status', 'New')                                                
                                    ->where('special', 1)
                                    ->where('is_approved', 0)
                                    ->get('tbl_req_mno_msisdn')
                                    ->num_rows();
                            ?> 
                            <h3> <?= $new_request_number; ?> </h3>
                            <p>Special Request</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users fa-1x" style="margin-top: 19px;"></i>
                        </div>
                        <a href="<?= site_url('admin/new_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
        
                 </div>
        <!-- ./col -->
<!--        <div class="col-lg-4 col-xs-4">
           small box 
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>0<sup style="font-size: 20px"></sup></h3>

              <p>Summery</p>
            </div>
            <div class="icon">
              <i class="fa fa-product-hunt" style="margin-top: 19px;"></i>
            </div>
            <a href="<?= site_url('request/pending_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>-->
        <!-- ./col -->
<!--        <div class="col-lg-4 col-xs-4">
           small box 
          <div class="small-box bg-danger">
            <div class="inner">
                 <?php $documents = $this->db
                                        ->where('request_status','completed')
//                                        ->where('user_generated_by', $this->session->userdata('user_id'))
                                        ->get('tbl_req_mno_msisdn')
                                        ->num_rows(); ?>
              <h3> <?= $documents; ?> </h3>

              <p>Documents</p>
            </div>
            <div class="icon">
              <i class="fa fa-bell-slash-o" style="margin-top: 19px;"></i>
            </div>
            <a href="<?= site_url('request/completed_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>-->
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
                        
                        
                        
                        
                                
                        
                        
