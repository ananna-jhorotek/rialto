<div class="content-wrapper">
    <section class="content-header">
          <h1>Menu List<a href="<?= site_url('settings/create_menu')?>" class="btn btn-warning add-btn pull-right">Add New Menu</a></h1>      
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
                                        <th><center>Menu Name</center></th>
                                        <th><center>Menu Url</center></th>
                                        <th><center>Parent</center></th>
                                        <th><center>Menu Icon</center></th>                                       
                                        <th><center>Action</center></th>
                                        </tr>
                                </thead>                                
                                <tbody>
                                      <?php $i = 1; foreach ($menu_list as $menu): ?>
                                          <tr>
                                              <td><?php echo $i; ?></td>
                                              <td><?= $menu['menu_title']; ?></td>                                        
                                              <td><?= $menu['menu_url']; ?></td>                                   
                                              <?php $parent = $this->db->where('menuid', $menu['parent'])->get('menus')->row_array(); ?>
                                              <?php if ($parent == NULL) { ?>
                                                  <td></td>
                                              <?php } else { ?>
                                                  <td><?= $parent['menu_title']; ?></td>
    <?php } ?>
                                              <td><?= $menu['icon_class']; ?></td>
                                              <td>
                                                <center>
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" onclick="$('#nurse_view_5').modal('show');" id="edit_info" data-menu_id="<?= $menu['menuid'] ?>" data-original-title="Edit"><i class="fa fa-pencil-square-o"></i></a>  
                                                    <a class="btn btn-danger btn-xs" data-toggle="tooltip" href="<?= site_url('settings/menu_delete/' . $menu['menuid']) ?>" onclick="return confirm('Are you sure you want to delete this item?');"  data-original-title="Delete"><i class="fa fa-trash"></i></a>   
                                                </center>
                                               </td>                                        
                                      </tr>  
    <?php $i++;
endforeach; ?>                                                                   
                                  </tbody>
                              </table>
                          </div>                     
                      </div>
                  </div>
              </div>
          </div>
<div id="nurse_view_5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                                <h4 class="modal-title">Edit Information</h4>
                        </div>
                        <div class="modal-body" id="edit_info_page">
                          
                        </div>
                    </div>
                </div>
</div>



<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>            
<script>
    $(document).ready(function () {
     $('body').on('click', '#edit_info', function () {
         var menu_id = $(this).data('menu_id');
          var url = '<?= site_url('settings/ajax_edit_form'); ?>';
            $.ajax({
                    type : "post",
                    data : {'menu' : menu_id},
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