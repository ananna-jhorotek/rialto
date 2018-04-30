<div class="content-wrapper">
       <section class="content-header">
           <h1>Dashboard Access Create<a href="<?= site_url('settings/function_list')?>" class="btn btn-success add-btn pull-right">Dashboard Access List</a></h1>      
        </section>
        <section class="content">
         <div class="row">
<div class="col-md-12">    
    <div class="box box-info">
      <div class="box-header"></div>      
        <div class="box-body">  
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/save_function');?>">
                                <div class="form-group">
                                  <div class="col-sm-3">
                                      <label>Function Name</label>
                                      <input type="text" id="ccname" name="function_name" class="form-control" >
                                  </div>
                                  <div class="col-sm-4 col-sm-offset-1">
                                      <label>Function Controller</label>
                                      <input type="text" name="menu_link" id="function_controller" class="form-control" >
                                  </div>
                                  <div class="col-sm-3">
                                      <label>Function</label>
                                      <input type="text" id="ccname" name="function" class="form-control" >
                                  </div>
                                </div>                                                                                      
                                <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="submit" value="Add Function" name="submit" id="sub" class="btn btn-primary add-btn">
                                  </div>
                                </div>
                              </form>
                            
                            
                        </div>
                    </div>
		</div>
            </div>
	</div>