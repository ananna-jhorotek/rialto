<?php
    function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
?>
<?php $password = random_password(8); 
 //var_dump($password);die;
?>



<div class="content-wrapper">
    <section class="content-header">
        <?php
               if ($this->session->flashdata('item')) {
                    $message = $this->session->flashdata('item');
                    ?>
          <div align="right" class="<?php echo $message['class'] ?>">  <?php echo $message['message']; ?></div>
                    <?php } ?>
      <h1>User List 
          
          
          <a href="<?= site_url('settings/create_user')?>" class="btn btn-warning add-btn pull-right">Add New User</a></h1>  
          
            

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
                                        <th><center>E-Mail</center></th>
                                        <th><center>Name</center></th>                                       
                                        <th><center>Phone Number</center></th> 
                                        <th><center>User Type</center></th>    
                                        <th><center>Status</center></th>       
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i = 1; foreach ($user_list as $user): ?>
                                        <tr>
                                            <td align="center"><?php echo $i; ?></td>
                                            <td align="center"><?= $user['email']; ?></td>                                        
                                            <td align="center"><?= $user['name']; ?></td>    
                                            <td align="center"><?= $user['phone']; ?></td>
                                            <?php if($user['is_authorized']=='1'){ ?>
                                                <td align="center"><?= $user['role_name'].' '.'<span style="color:red; font-weight:bold;">(AO)</span>'; ?></td>
                                            <?php }  else { ?>
                                                <td align="center"><?= $user['role_name']; ?></td>
                                            <?php } ?>
                                            
                                            <td align="center">                                                
                                             <?php if($user['active'] !='0') { ?>                                                                                         
                                                <a  data-inactive="<?= $user['active'];?>" data-userid="<?= $user['id'];?>" class="btn btn-success add-btn">Active</a> 
                                                <?php }  else { ?>
                                                   <a  data-inactive="<?= $user['active'];?>" data-userid="<?= $user['id'];?>" class="btn btn-danger add-btn">Suspend</a> 
                                                <?php  } ?>
                                            </td>     
                                            <td align="center">                                                 
                                                     <a data-remote="false" data-toggle="modal" data-target="#myModal2" class="btn btn-xs btn-info"
                                                       id="edit_info" data-function_id="<?= $user['id'];?>" title="Edit"><i class="fa fa-pencil-square-o"></i> </a>  
                                                    <a data-remote="false" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-warning"
                                                                                data-user_id="<?= $user['id'];?>"
                                                                                data-username="<?= $user['name'];?>" 
                                                                                data-email="<?= $user['email'];?>" 
                                                                                style="" title="Reset password"> <i class="fa fa-key"></i>
                                                    </a>
                                                    <a href="<?= site_url('settings/user_delete/' . $user['id']) ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></a>
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
        
        <!--habib modal load start-->
        <div class="modal fade" id="myModal" tabindex="-1" style="margin-left:25px; margin-top: 50px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/reset_user_password'); ?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Reset Password</h4>
                        </div>
                        <div class="modal-body">
                            <!--Upload start-->    

                            <input type="hidden" value="<?= $user['id']; ?>" name="user_id">
                            <input type="hidden" value="<?= $user['email']; ?>" name="email">
                            <input type="hidden" value="<?= $user['name']; ?>" name="username">             
                            <input class="form-control" value="<?= $password; ?>" type="text" name="password">

                            <!--upload end-->
                        </div>
                        <div class="modal-footer">        

                            <input type="submit" class="btn btn-success" name="upload" value="Reset">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
<!--habib madal load end-->
        
        
        <div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" style="margin-left:25px; margin-top: 50px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <!--<div id="nurse_view_5" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                                <h4 class="modal-title">Edit User Information</h4>
                        </div>
                        <div class="modal-body" id="edit_info_page">
                          
                        </div>
                    </div>
                </div>
</div>
        


<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>   
<script type="application/javascript">
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});
</script>
<script>
    $(document).ready(function () {
       
     $('body').on('click', '#edit_info', function () {          
         var function_id = $(this).data('function_id');
          var url = '<?= site_url('settings/ajax_edit_user_page'); ?>';
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


<script>
    $(document).ready(function () {
    $('body').on('change', '#wing_id', function () {
            var wing_id = $('#wing_id').val();
            var url = "<?= site_url('settings/wing_wise_battalion'); ?>";
            $.ajax({
                type: "post",
                data: {'wing_id': wing_id},
                dataType: "html",
                url: url,
                success: function (result) {  
                    $('.bat_pre_data').hide();
                    $('#battalion_id').show();
                    $('#battalion_id').html(result);
                    
                    
                   
                },
            });
        });
    
      });
</script>

<script>
    $(document).ready(function () {
    $('body').on('change', '#battalion_id', function () {
            var battalion_id = $('#battalion_id').val();
            var url = "<?= site_url('settings/bat_wise_unit'); ?>";
            $.ajax({
                type: "post",
                data: {'battalion_id': battalion_id},
                dataType: "html",
                url: url,
                success: function (result) {  
                    $('.unit_predata').hide();
                    $('#unit_id').show();
                    $('#unit_id').html(result);
                    
                  
                   
                },
            });
        });
    
      });
</script>

<script>
    $(document).ready(function () {
    $('body').on('change', '#unit_id', function () {
            var unit_id = $('#unit_id').val();
            var url = "<?= site_url('settings/unit_wise_desig'); ?>";
            $.ajax({
                type: "post",
                data: {'unit': unit_id},
                dataType: "html",
                url: url,
                success: function (result) {  
                    $('.desig_predata').hide();
                    $('#designation_id').show();
                    $('#designation_id').html(result);                   
                  
                   
                },
            });
        });
    
      });
</script>


<script>
    $(document).ready(function () {
    $('body').on('change', '#battalion_id', function () {
            var battalion_id = $('#battalion_id').val();
            var url = "<?= site_url('settings/bat_wise_rt_officer'); ?>";
            $.ajax({
                type: "post",
                data: {'battalion_id': battalion_id},
                dataType: "html",
                url: url,
                success: function (result) {  
                    $('.pre_rt_officer').hide();
                    $('#rt_officer_id').show();
                    $('#rt_officer_id').html(result);                   
                  
                   
                },
            });
        });
    
      });
</script>


