<div class="content-wrapper">
    <section class="content-header">
          <h1>Add Menu<a href="<?= site_url('settings/menu_list')?>" class="btn btn-success add-btn pull-right">Menu List</a></h1> 
    </section>
        <section class="content">
        <div class="row">
<div class="col-md-12">    
    <div class="box box-info">
      <div class="box-header"></div>      
        <div class="box-body"> 
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/save_menu');?>">
                                <div class="form-group">
                                  <div class="col-sm-3"> 
                                      <label>Menu Name</label>
                                      <input type="text" id="ccname" name="menu_name" class="form-control" >
                                  </div>
                                  <div class="col-sm-4 col-sm-offset-1">
                                      <label>Menu Link</label>
                                      <input type="text" name="menu_link" id="ccname" class="form-control" >
                                  </div>
                                  <div class="col-sm-3 col-sm-offset-1">
                                      <label>Menu Icon</label>
                                      <input type="text"  name="menu_icon" id="cemail" class="form-control" >
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-3">
                                    <?php $menu=$this->db->get('menus')->result_array();?>
                                      <label>Parent</label>
                                      <select class="form-control" name="menu">
                                       <option>Select Menu</option>
                                           <?php foreach($menu as $menus):?>
                                           <option value="<?= $menus['menuid'] ?>"><?= $menus['menu_title'] ?></option>
                                   <?php endforeach;?>
                                      </select>
                                  </div>
                                    
                                    
                                </div>                                                       
                                <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="submit" value="Add Menu" name="submit" id="sub" class="btn btn-primary add-btn">
                                  </div>
                                </div>
                              </form>
                            
                            
                        </div>
                    </div>
		</div>
            </div>
	</div>

