



<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/update_function');?>">
    <input type="hidden" value="<?= $function_list['function_id'];?>" name="function_id">
                                <div class="form-group">
                                  <div class="col-sm-4">
                                      <label>Function Name</label>
                                      <input type="text" id="ccname" value="<?= $function_list['title'];?>" name="function_name" class="form-control" >
                                  </div>
                                  <div class="col-sm-4 ">
                                      <label>Controller</label>
                                      <input type="text" name="controller" value="<?= $function_list['controller'];?>" id="ccname" class="form-control" >
                                  </div>
                                  <div class="col-sm-4 ">
                                      <label>Function</label>
                                      <input type="text"  name="function" value="<?= $function_list['function'];?>" id="cemail" class="form-control" >
                                  </div>
                                </div>                                                                                      
                                <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="submit" value="Update Function" name="submit" id="sub" class="btn btn-primary add-btn">
                                  </div>
                                </div>
                              </form> 