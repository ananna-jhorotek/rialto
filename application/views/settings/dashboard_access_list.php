<div class="content-wrapper">
    <section class="content-header">
           <h1>Access List<a href="<?= site_url('settings/menu_priority')?>" class="btn btn-warning add-btn pull-right">Create Menu Priority</a></h1>      
    </section>
      <section class="content">
      <div class="row">              
<div class="col-xs-12">
      <div class="box box-info"> 
        <div class="box-header"></div>
        <div class="box-body">                       
            <div class="table-responsive"> 
            <table id="example" class=" data-table table table-striped table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><center>Sl No</center></th>
                                        <th><center>Role Name</center></th>  
                                        <th><center>Dashboard Name</center></th>                                                                    
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i=1; foreach($role_list as $role):?>
                                    <tr>
                                        <td><?php echo $i ;?></td>                                        
                                        <td><?= $role['role_name'];?></td> 
                                        <td align="center">                                            
                                           <?php $dashboards_name = $this->db->join('dashboard','dashboard.dashboard_id = dashboard_access.dashboard_id')->where('roleid',$role['roleid'])->get('dashboard_access')->result_array();?>
                                                <?php foreach($dashboards_name as $dashboards):?>
                                                         <?= $dashboards['title'].', '?>
                                                <?php  endforeach;?>                     
                                        </td>                                     
                                        <td>
                                           <center>
                                                <a class="btn btn-primary" data-toggle="tooltip" onclick="$('#nurse_view_5').modal('show');" id="edit_info" data-role_id="<?= $role['roleid']?>" data-original-title="Edit">
                                                   <i class="fa fa-pencil"></i>
                                               </a>  
                                           </center>
                                        </td>
                                    </tr>  
                                   <?php $i++; endforeach;?>                                                                   
                                </tbody>
                            </table>
       </div>                         
                            
                            
                        </div>
                    </div>
		</div>
            </div>

<div id="nurse_view_5" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 750px;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                                <h4 class="modal-title">Edit Information</h4>
                        </div>
                        <div  class="modal-body" id="edit_info_page">
                          
                        </div>
                    </div>
                </div>
</div>



<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>                       
<script>
    $(document).ready(function () {
      
     $('body').on('click', '#edit_info', function () {
         var role_id = $(this).data('role_id');
          var url = '<?= site_url('settings/ajax_dashboard_access_edit'); ?>';
            $.ajax({
                    type : "post",
                    data : {'role_id' : role_id},
                    async : false,
                    dataType : "html",
                    url : url,
                    success : function (result) {
                      $('#edit_info_page').html(result);  
                    },
                                   
                });
        });   
    });
</script>