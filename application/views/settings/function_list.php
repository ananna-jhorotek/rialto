<div class="content-wrapper">
    <section class="content-header">
           <h1>Function List<a href="<?= site_url('settings/create_function')?>" class="btn btn-warning add-btn pull-right">Add New Function</a></h1>      
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
                    <th><center>Function Name</center></th>
                    <th><center>Controller Name</center></th>
                    <th><center>Parent</center></th>                                                                            
                    <th><center>Action</center></th>
                    </tr>
                    </thead>                                
                    <tbody>
                        <?php $i = 1;
                        foreach ($function_list as $function):
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?= $function['title']; ?></td>                                        
                                <td><?= $function['controller']; ?></td>
                                <td><?= $function['function']; ?></td>                                                                                
                                <td>
                        <center>
                            <a class="btn btn-success btn-xs" data-toggle="tooltip" onclick="$('#nurse_view_5').modal('show');" id="edit_info" data-function_id="<?= $function['function_id'] ?>" title="Edit"><i class="fa fa-pencil"></i> </a>  
                            <a href="<?= site_url('settings/function_delete/' . $function['function_id']) ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></a> 

                        </center>
                        </td>
                        </tr>  
                        <?php $i++;
                    endforeach;
                    ?>                                                                   
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
         var function_id = $(this).data('function_id');
          var url = '<?= site_url('settings/ajax_function_edit_form'); ?>';
            $.ajax({
                    type : "post",
                    data : {'function' : function_id},
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