<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          
        <!-- Content Header (Page header) -->
        <section class="content-header"> 
            <h1>Create New Deployment
                <!--<a href="<?= site_url('settings/create_user') ?>" class="btn btn-warning add-btn pull-right">Add New Group</a>-->
            </h1>      
        </section>
  <!-- Main content -->
  <section class="content">
      <div class="row">              
          <div class="col-md-12">    
              <div class="box box-info">
                  <div class="box-header"></div>      
                  <div class="box-body"> 
                        <div class="col-sm-12 col-md-12 col-lg-12">
                              <div class="main">
                                    <div class="row">
                                          <div class="col-lg-6 col-xs-6">
                                                <div class="panel panel-success">
                                                      <div class="panel-body">    
                                                          <div class="form-group">
                                                              <label for="txtFloor"><span class="errorStar"></span> Wing Name :</label>
                                                              <?php $wings = $this->db->get('wings')->result_array();?>
                                                              <select class="form-control" id="wing_id">
                                                                  <option value=''>Select Wing</option>
                                                                  <?php foreach ($wings as $wing): ?>
                                                                      <option  value="<?= $wing['wings_id']; ?>"><?= $wing['wing']; ?></option>
                                                                  <?php endforeach; ?> 
                                                              </select>   
                                                          </div>
                                                          <div class="form-group" id="userNameDiv">
                                                              <label for="txtFloor"><span class="errorStar"></span> Deployment :</label>
                                                              <input type="text" id="deployment_name"  class="form-control">
                                                              <span style="color: red;" class="text-help" id="userNameErrorMsg"></span>                                                             
                                                          </div>
                                                          <div class="form-group">
                                                              <input type="submit" style="margin-left: 185px;" name="submit" id="save_user_type" class="btn btn-danger" value="Submit">
                                                          </div>
                                                      </div> 
                                                </div> 
                                          </div> 
                                          <div class="col-lg-6 col-xs-6">
                                                <div class="panel panel-success">
                                                    <div class="panel-heading">Deployment List</div>   
                                                    <div class="panel-body"> 
                                                        <div class="form-group" id="user_type_list">

                                                        </div>
                                                    </div>
                                                </div>
                                          </div>
                                    </div> 
                              </div>
                        </div>


                  </div>
              </div>
          </div>           
      </div>
  </section>
  
  
  <div class="modal fade" id="myModal2" tabindex="-1" style="margin-left:25px; margin-top: 50px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <form  enctype="multipart/form-data" method="post" action="<?= site_url('settings/edit_battalion'); ?>">
                  <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                                <h4 class="modal-title">Edit Deployment Information</h4>
                        </div>
                        <div class="modal-body" id="edit_info_page">
                          
                            
                        </div>
                        
                        <div class="modal-footer">
                            <input type="submit" value="Update Information" name="submit" id="sub" class="btn btn-primary add-btn">
                            <!--<button type="button" class="btn btn-info">Save changes</button>-->
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                        
                    </div>
                </form>
                </div>
</div>
  
  
  
  
  
<script src="<?= base_url('assets/js/jquery-2.2.3.min.js'); ?>"></script> 

<script type="text/javascript">
    $(document).ready(function () {
        $('body').on('input', '#deployment_name', function () {
           var designation = $('#deployment_name').val();  
           
            $.ajax({
                async: false,
                url: "<?= site_url('settings/check_existing_battalion'); ?>",
                type: "POST",
                data: {'designation': designation},
                success: function (result)
                {                  
                    if (result == 0) {
                        $("#userNameDiv").removeClass("has-warning");
                        $("#deployment_name").removeClass("form-control-danger");      
                        $('#userNameErrorMsg').text('');
                    } else {
                            $('#deployment_name').val('');
                            $("#userNameDiv").addClass("has-warning");
                            $("#deployment_name").addClass("form-control-danger");
                            $("#userNameErrorMsg").text("This Name Is Already Taken. Please Try Something Else.");
                    }

                }
            });
        });
    });
</script>


<script>
    $(document).ready(function(){   
            $.ajax({
                async : false,
                dataType : "html",
                url : "<?= site_url('settings/battalion_list')?>",
                    success : function(result){
                        $('#user_type_list').html(result);	
                    },
            });                        
    $('body').on('click','#save_user_type',function(){ 
        var deployment_name = $('#deployment_name').val();      
        var wing_id = $('#wing_id').val(); 
        
        if (deployment_name == null || deployment_name == " ") {
            $("#deployment_name").addClass("input-danger");
        }if (deployment_name == null || deployment_name == "") {
                alert("Please Fill Out The Required Field");
                return false;
        }if (wing_id == null || wing_id == " ") {
            $("#wing_id").addClass("input-danger");
        }if (wing_id == null || wing_id == "") {
                alert("Please Fill Out The Required Field");
                return false;
        }else{
            var url = "<?= site_url('settings/save_battalion');?>";
            $.ajax({
                    type : "post",
                    data : { 'deployment_name' : deployment_name, 'wing_id' : wing_id},
                                async : false,
                                dataType : "html",
                                url : url,
                    success : function(result){	
                                $('#user_type_list').html(result);
                                window.location.replace("<?= site_url('settings/battalion'); ?>"); 
                            },
            });
            }
            
        });
          
                      
            $('body').on('click','.delete_user_type',function(){
                var user_type_id = $(this).data('user_type_id');					
		var url = "<?= site_url('settings/battalion_delete');?>";
                    $.ajax({
                            type : "post",
                            data : {'user_type_id' : user_type_id},
                                     async : false,
                                     dataType : "html",
                                     url : url,
                            success : function (result) {
                              $('#user_type_list').html(result); 
                              window.location.replace("<?= site_url('settings/battalion'); ?>"); 
                            },
                                   
                            });
		});
                });
</script>  

<script>
    $(document).ready(function () {
       
     $('body').on('click', '#edit_info', function () {          
         var function_id = $(this).data('function_id');
         var url = '<?= site_url('settings/ajax_edit_battalion_page'); ?>';
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



