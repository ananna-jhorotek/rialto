<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/update_menu');?>">
    <input type="hidden" value="<?= $menu_list['menuid'];?>" name="menuid">
                                <div class="form-group">
                                  <div class="col-sm-3">
                                      <label>Menu Name</label>
                                      <input type="text" id="ccname" value="<?= $menu_list['menu_title'];?>" name="menu_name" class="form-control" >
                                  </div>
                                  <div class="col-sm-4 col-sm-offset-1">
                                      <label>Menu Link</label>
                                      <input type="text" name="menu_link" value="<?= $menu_list['menu_url'];?>" id="ccname" class="form-control" >
                                  </div>
                                  <div class="col-sm-3 col-sm-offset-1">
                                      <label>Menu Icon</label>
                                      <input type="text"  name="menu_icon" value="<?= $menu_list['icon_class'];?>" id="cemail" class="form-control" >
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-3">
                                    <?php $menus=$this->db->get('menus')->result_array();?>
                                      <label>Parent</label>
                                      <select class="form-control" required="required"  name="menu">
                                            <option>Select Menu</option>
                                                   <?php foreach($menus as $menu):?>
                                                   <option value="<?= $menu['menuid'] ?>" <?= ($menu['menuid'] != $menu_list['menuid']) ? '' : 'selected'?>><?= $menu['menu_title'] ?></option>
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