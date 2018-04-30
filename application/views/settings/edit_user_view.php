<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add User Information
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboards/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"> 
          <!-- Small boxes (Stat box) -->
          <div class="row">
              
<!--####################################       start main content     ##########################################-->
              

<div class="col-md-12">    
    <div class="box box-info">
      <div class="box-header">
<!--        <h3 class="box-title">Floor Entry Form</h3>-->
        <div align="right" style="margin-top:">
            <a class="btn btn-primary btn-xs" title="" data-toggle="tooltip" href="" data-original-title="Back">
                <i class="fa fa-reply"></i>
            </a> 
        </div>
      </div>      
        <div class="box-body">  
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/update_user');?>">
                                <input type="hidden" value="<?= $user_details['id']?>" name="user_id">
                                <div class="form-group">
                                  <div class="col-sm-4">
                                      <label>First Name</label>
                                      <input type="text" id="ccname" value="<?= $user_details['first_name']?>" name="fname" class="form-control" >
                                  </div>
                                  <div class="col-sm-4 ">
                                      <label>Last Name</label>
                                      <input type="text" name="lname" value="<?= $user_details['last_name']?>" id="ccname" class="form-control" >
                                  </div>
                                  <div class="col-sm-4">
                                      <label>User Name</label>
                                      <input type="email" placeholder="E-Mail" value="<?= $user_details['email']?>" name="username" id="cemail" class="form-control" >
                                  </div>
                                </div>
                                <div class="form-group">
<!--                                  <div class="col-sm-3">
                                      <label>Password</label>
                                      <input type="password" name="password" value="<?= $user_details['password']?>" id="cstreet" class="form-control" >
                                  </div>-->
                                  <div class="col-sm-4">
                                      <label>Contact No.</label>
                                      <input type="text" name="contact_no" value="<?= $user_details['phone']?>" id="cdist" class="form-control" >
                                  </div>
                                  <div class="col-sm-4">
                                      <label>Role</label>
                                      <?php $roles=$this->db->get('roles')->result_array();?>
                                      <select class="form-control" name="role">
                                          <option>Select Role</option>
                                           <?php foreach($roles as $role):?>
                                                   <option value="<?= $role['roleid'] ?>" <?= ($role['roleid'] != $user_details['roleid']) ? '' : 'selected'?>><?= $role['role_name'] ?></option>
                                           <?php endforeach;?>
                                      </select>                                      
                                  </div> 
                                </div>                                                       
                                <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="submit" value="Update User" name="submit" id="sub" class="btn btn-primary add-btn">
                                  </div>
                                </div>
                              </form>
                            
                            
                        </div>
                    </div>
		</div>
            </div>
	</div>