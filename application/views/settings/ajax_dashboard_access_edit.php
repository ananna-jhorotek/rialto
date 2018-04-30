<div class="main_part">
			<div class="container main-bg">
				<div class="row">
                	 
                        <div class="main">                            
                                                
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/update_dash_access');?>">
                                <div class="form-group">
                                  <div class="col-sm-3">
                                      <label>Role</label>
                                      <?php $roles=$this->db->get('roles')->result_array();?>
                                      <select class="form-control" name="role">
                                          <option>Select Role</option>
                                           <?php foreach($roles as $role):?>
                                                   <option value="<?= $role['roleid'] ?>" <?= ($role['roleid'] != $dashboard_access['roleid']) ? '' : 'selected'?>><?= $role['role_name'] ?></option>
                                           <?php endforeach;?>
                                      </select>                                      
                                  </div>  
                                    <div class="col-sm-4" style=" height:300px; overflow:scroll;">
                                        <label class="control-label" >Menu</label><br />
                                        <input type="checkbox" id="selectAll"> Select All <br>                                    
                                        <?php $dash_datas = $this->db->get('dashboard')->result_array(); ?>                                    
                                        <?php foreach ($dash_datas as $dash_data) {
                                            $dashboards = $this->db->where('roleid', $role_id)->where('dashboard_id', $dash_data['dashboard_id'])->get('dashboard_access')->row_array();
                                            ?>      
                                            <input type="checkbox" class="selectSingle" name="dash_access[]" value="<?= $dash_data['dashboard_id']; ?>"  
                                                   <?= ($dash_data['dashboard_id'] != $dashboards['dashboard_id']) ? '' : 'checked' ?> ng-checked="all">
                                            <?= $dash_data['title']; ?> 
                                            <br/>
                                        <?php } ?>           
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