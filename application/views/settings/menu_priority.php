<div class="content-wrapper">
       <section class="content-header">
           <h1>Create Menu Priority<a href="<?= site_url('settings/access_list')?>" class="btn btn-success add-btn pull-right">Access List</a></h1>      
        </section>
        <section class="content">
         <div class="row">
<div class="col-md-12">    
    <div class="box box-info">
      <div class="box-header"></div>      
      <div class="box-body"> 
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/save_menu_priority');?>">
                                        <div class="form-group">
                                          <div class="col-sm-3">
                                              <label>Role</label>
                                              <?php $roles=$this->db->get('roles')->result_array();?>
                                              <select class="form-control" name="role_id">
                                                  <option>Select Role</option>
                                                   <?php foreach($roles as $role):?>
                                                   <option value="<?= $role['roleid'] ?>"><?= $role['role_name'] ?></option>
                                                <?php endforeach;?>
                                              </select>                                      
                                          </div>  
                                          <div class="col-sm-5">                                         
                                                <?php $menu=$this->db->get('menus')->result_array();?>
                                                    <label>Menus</label>
                                                    <select class="form-control" name="menu_id">
                                                        <option>Select Menu</option>
                                                        <?php foreach ($menu as $menus): ?>
                                                            <option value="<?= $menus['menuid'] ?>"><?= $menus['menu_title'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>                                         
                                          </div> 
                                          <div class="col-sm-3">                                            
                                              <label for="txtFloor"><span class="errorStar"></span>Priority :</label>
                                              <input type="text" name="priority" class="form-control">                                              
                                          </div>   
                                        </div>                                
                                        <div class="form-group">
                                          <div class="col-sm-10">
                                              <input type="submit" value="Set Menu Priority" name="submit" id="sub" class="btn btn-primary add-btn">
                                          </div>
                                        </div>
                                      </form>                      
                            
                        </div>
                    </div>
		</div>
            </div>
	</div>
