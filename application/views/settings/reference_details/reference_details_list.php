<div class="content-wrapper">
    <section class="content-header">
      <h1>Reference Details List<a href="<?= site_url('settings/reference_details')?>" class="btn btn-warning add-btn pull-right">Add New Reference Details</a></h1>      
    </section>
    <section class="content">
        <div class="row">              
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                    </div> 
                    <div class="box-body"> <!--avove lines are common for all table-->     
                        <div class="table-responsive">
                             <table id="example" class=" data-table table table-striped table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><center>Sl No</center></th>
                                        <th><center>Reference Type</center></th>
                                        <th><center>Owner Of Reference</center></th>                                       
                                        <th><center>Designation</center></th>       
                                        <th><center>Organization</center></th>  
                                        <th><center>Contact Email</center></th>
                                        <th><center>Contact Number</center></th>  
                                        <th><center>Reference Number</center></th>  
                                        <th><center>Relation</center></th>  
                                        <th><center>Priority</center></th>  
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i = 1; foreach ($reference_details_list as $reference_detail): ?>
                                        <tr>
                                            <td align="center"><?php echo $i; ?></td>
                                            <td align="center"><?= $reference_detail['reference_type']; ?></td>                                        
                                            <td align="center"><?= $reference_detail['owner_of_reference']; ?></td>    
                                            <td align="center"><?= $reference_detail['designation']; ?></td>
                                            <td align="center"><?= $reference_detail['organization']; ?></td>    
                                            <td align="center"><?= $reference_detail['contact_no']; ?></td>
                                            <td align="center"><?= $reference_detail['contact_email']; ?></td>                                        
                                            <td align="center"><?= $reference_detail['reference_number']; ?></td>    
                                            <td align="center"><?= $reference_detail['relation']; ?></td>    
                                            <td align="center"><?= $reference_detail['priority']; ?></td>    
                                                                                        
                                            <td align="center">                                                 
                                                    <a class="btn btn-info btn-xs" data-toggle="tooltip" onclick="$('#nurse_view_5').modal('show');"  id="edit_info" data-function_id="<?= $reference_detail['reference_details_id'];?>" title="Edit"><i class="fa fa-pencil-square-o"></i> </a>  
                                                    <a href="<?= site_url('settings/reference_details_delete/' . $reference_detail['reference_details_id']) ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></a>
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
        
        
        
        <div id="nurse_view_5" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                                <h4 class="modal-title">Edit Reference Details</h4>
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
		 
 
			
			
			//------------Adding logs to DB------------
			var request_type = 'delete';
			var url = window.location.href;
			data = { 'request_type' : request_type, 'request_url':url, 'function_id' : function_id };
			
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('RequestLogs/storeActivitesLogs');?>",
				data: data,
				dataType: 'json',
				success: function(data){
				}
			});	
			//------------Adding logs to DB------------
		 
		 
         //alert(function_id);
          var url = '<?= site_url('settings/ajax_edit_reference_details_page'); ?>';
            $.ajax({
                    type : "post",
                    data : {'user_id' : function_id},
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
        


