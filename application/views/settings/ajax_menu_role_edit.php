<div class="main_part">
			<div class="container main-bg">
				<div class="row">
                	 
                        <div class="main">                            
                                                
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/update_role');?>">
                                <div class="form-group">
                                  <div class="col-sm-3">
                                      <label>Role</label>
                                      <?php $roles=$this->db->get('roles')->result_array();?>
                                      <select class="form-control" name="role">
                                          <option>Select Role</option>
                                           <?php foreach($roles as $role):?>
                                                   <option value="<?= $role['roleid'] ?>" <?= ($role['roleid'] != $menu_role['roleid']) ? '' : 'selected'?>><?= $role['role_name'] ?></option>
                                           <?php endforeach;?>
                                      </select>                                      
                                  </div>  
                                    <div class="col-sm-4" style=" height:300px; overflow:scroll;">
                                    <label class="control-label" >Menu</label><br />
                                     <input type="checkbox" id="selectAll"> Select All <br>
                                    <?php $menus=$this->db->get('menus')->result_array();?>          
                                    <?php foreach($menus as $menu){                                        
                                        $menus_rolesss = $this->db
                                                            ->join('menus','menus.menuid=menu_role.menuid')
                                                            ->where('menus.menuid',$menu['menuid'])
                                                            ->where('menu_role.roleid',$role_id)
                                                            ->get('menu_role')
                                                            ->row_array(); 
                                        ?>
                                    <input type="checkbox" class="selectSingle" name="menu[]" value="<?= $menu['menuid'];?>" <?= ($menu['menuid'] != $menus_rolesss['menuid']) ? '' : 'checked'?> ng-checked="all"><?= $menu['menu_title'];?>
                                   <br/>
                                     <?php }?>                 
                                </div>

                                </div> 
                                <div class="form-group">
                                  <div class="col-sm-3">                                                                            
                                  </div>  
                                   <div class="col-sm-4" style=" height:300px; overflow:scroll;">
                                    <label class="control-label" >Function</label><br />
                                    <input type="checkbox" id="checkedAll"> Select All <br>
                                    <?php $functions=$this->db->get('function')->result_array();?>  
                                    <?php foreach($functions as $function){
                                     $function_rolesss = $this->db
                                                            ->join('function','function.function_id=function_access.function_id') 
                                                            ->where('function.function_id',$function['function_id'])
                                                            ->where('function_access.roleid',$role_id)
                                                            ->get('function_access')
                                                            ->row_array(); 
                                        ?>
                                    
                                    <input type="checkbox" class="checkSingle" name="function[]" value="<?= $function['function_id'];?>" <?= ($function['function_id'] != $function_rolesss['function_id']) ? '' : 'checked'?> ng-checked="all"><?= $function['title'];?>
                                   <br>
                                    <?php }?>        
                                </div>
                                </div>  
                                
                               
                                <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="submit" value="Update Role" name="submit" id="sub" class="btn btn-primary add-btn">
                                  </div>
                                </div>
                              </form>                          
                            
                        </div>
                 
		</div>
            </div>
	</div>

<script>
  $(document).ready(function() {
  $("#checkedAll").change(function(){
    if(this.checked){
      $(".checkSingle").each(function(){
        this.checked=true;
      })              
    }else{
      $(".checkSingle").each(function(){
        this.checked=false;
      })              
    }
  });

  $(".checkSingle").click(function () {
    if ($(this).is(":checked")){
      var isAllChecked = 0;
      $(".checkSingle").each(function(){
        if(!this.checked)
           isAllChecked = 1;
      })              
      if(isAllChecked == 0){ $("#checkedAll").prop("checked", true); }     
    }else {
      $("#checkedAll").prop("checked", false);
    }
  });
});
</script>

<script>
  $(document).ready(function() {
  $("#selectAll").change(function(){
    if(this.checked){
      $(".selectSingle").each(function(){
        this.checked=true;
      })              
    }else{
      $(".selectSingle").each(function(){
        this.checked=false;
      })              
    }
  });

  $(".selectSingle").click(function () {
    if ($(this).is(":checked")){
      var isAllSelect = 0;
      $(".selectSingle").each(function(){
        if(!this.checked)
           isAllSelect = 1;
      })              
      if(isAllSelect == 0){ $("#selectAll").prop("checked", true); }     
    }else {
      $("#selectAll").prop("checked", false);
    }
  });
});
</script>