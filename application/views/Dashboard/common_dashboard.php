
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
            <?php
			$user_id = $this->session->userdata('user_id');
			$role_id = $this->session->userdata('user_type');
			
			$dashboard_accessArray = $this->db
					->select('dashboard.title')
					->join('dashboard', 'dashboard.dashboard_id=dashboard_access.dashboard_id')
					->where('dashboard_access.roleid', $role_id)
					->get('dashboard_access')
					->result_array();
					
			// echo '<pre/>';
			// print_r($dashboard_accessArray);
			// die;
			
			foreach($dashboard_accessArray as $accessArray){
				if($accessArray['title'] == 'New'){?>
				<div class="col-lg-4 col-xs-4">
				<div class="small-box bg-red">
					  <div class="inner">
						  <?php $new_request_number = $this->db
                                                                                   ->where('request_status', 'new')
                                                                                   ->where('request_type','general')
                                                                                   ->get('tbl_req_mno_msisdn')
                                                                                   ->num_rows(); ?>
						  <h3> <?= $new_request_number; ?> </h3>
						  <p>New Request</p>
					  </div>
					<div class="icon">
					  <i class="fa fa-users fa-1x" style="margin-top: 19px;"></i>
					</div>
				  <a href="<?= site_url('RequestProvider/new_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
				</div>
				<?php
				}
				if($accessArray['title'] == 'Pending'){
				?>
							
					<!-- ./col -->
					<div class="col-lg-4 col-xs-4">
					  <!-- small box -->
					  <div class="small-box bg-yellow">
						<div class="inner">
							<?php $pending_request_number = $this->db->where('request_status','pending')->get('tbl_req_mno_msisdn')->num_rows();?>
						  <h3><?= $pending_request_number;?><sup style="font-size: 20px"></sup></h3>

						  <p>Pending Request</p>
						</div>
						<div class="icon">
						  <i class="fa fa-product-hunt" style="margin-top: 19px;"></i>
						</div>
                                            <a href="<?= site_url('RequestProvider/pending_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
					</div>
				<?php
				}
				if($accessArray['title'] == 'Completed'){
				?>
					<!-- ./col -->
						<div class="col-lg-4 col-xs-4">
						  <!-- small box -->
						  <div class="small-box bg-aqua">
							<div class="inner">
							  <?php $completed_request_number = $this->db
                                                                                                 ->where('request_status','completed')
                                                                                                 ->where('requested_by', $this->session->userdata('user_id'))
                                                                                                 ->get('tbl_req_mno_msisdn')
                                                                                                 ->num_rows();?>
							  <h3><?= $completed_request_number;?></h3>

							  <p>Completed Request</p>
							</div>
							<div class="icon">
							  <i class="fa fa-bell-slash-o" style="margin-top: 19px;"></i>
							</div>
							<a href="<?= site_url('RequestProvider/completed_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						  </div>
						</div>
				<?php
				}
				if($accessArray['title'] == 'Verified'){
				?>
					<!-- ./col -->
						
						<div class="col-lg-4 col-xs-4">
						  <!-- small box -->
						  <div class="small-box bg-aqua">
							<div class="inner">
							  <h3>0</h3>

							  <p>Verified Request</p>
							</div>
							<div class="icon">
							  <i class="fa fa-users fa-1x" style="margin-top: 19px;"></i>
							</div>
							<a href="<?= site_url('RequestProvider/new_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						  </div>
						</div>
				<?php
				}
				if($accessArray['title'] == 'Summery'){
				?>
					<!-- ./col -->
					<div class="col-lg-4 col-xs-4">
					  <!-- small box -->
					  <div class="small-box bg-primary">
						<div class="inner">
						  <h3>0<sup style="font-size: 20px"></sup></h3>

						  <p>Summery</p>
						</div>
						<div class="icon">
						  <i class="fa fa-product-hunt" style="margin-top: 19px;"></i>
						</div>
						<a href="<?= site_url('RequestProvider/pending_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div>
				<?php
				}
				if($accessArray['title'] == 'Document'){
				?>
					<!-- ./col -->
					<div class="col-lg-4 col-xs-4">
					  <!-- small box -->
					  <div class="small-box bg-danger">
						<div class="inner">
							 <?php $documents = $this->db
                                                                                ->where('request_status','completed')
                                                                                ->where('requested_by', $this->session->userdata('user_id'))
                                                                                ->get('tbl_req_mno_msisdn')
                                                                                ->num_rows(); ?>
						  <h3> <?= $documents; ?> </h3>

						  <p>Documents</p>
						</div>
						<div class="icon">
						  <i class="fa fa-bell-slash-o" style="margin-top: 19px;"></i>
						</div>
						<a href="<?= site_url('RequestProvider/completed_request_details'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div>
				<?php
				}
			}
			?>
            
            
        
        
        
        
        
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
                        
                        
                        
                        
                                
                        
                        
