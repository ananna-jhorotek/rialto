<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          
        <!-- Content Header (Page header) -->
        <section class="content-header"> 
            <h1>Create New Rank
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
                                                          <div class="form-group" id="userNameDiv">
                                                              <label for="txtFloor"><span class="errorStar"></span> Rank :</label>
                                                              <input type="text"  required="required" id="get_user_type"  class="form-control">
                                                              <span style="color: red;" class="text-help" id="userNameErrorMsg"></span>
                                                              <input class="user_type_id" type="hidden">
                                                          </div>
                                                          <div class="form-group">
                                                              <input type="submit" style="margin-left: 185px;" name="submit" id="save_user_type" class="btn btn-danger" value="Submit">
                                                          </div>
                                                      </div> 
                                                </div> 
                                          </div> 
                                          <div class="col-lg-6 col-xs-6">
                                                <div class="panel panel-success">
                                                    <div class="panel-heading">Rank List</div>   
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
  
<script src="<?= base_url('assets/js/jquery-2.2.3.min.js'); ?>"></script> 


<script type="text/javascript">
    $(document).ready(function () {
        $('body').on('input', '#get_user_type', function () {
           var designation = $('#get_user_type').val();            
            $.ajax({
                async: false,
                url: "<?= site_url('settings/check_existing_rank'); ?>",
                type: "POST",
                data: {'designation': designation},
                success: function (result)
                {                  
                    if (result == 0) {
                        $("#userNameDiv").removeClass("has-warning");
                        $("#get_user_type").removeClass("form-control-danger");      
                        $('#userNameErrorMsg').text('');
                    } else {
                            $('#get_user_type').val('');
                            $("#userNameDiv").addClass("has-warning");
                            $("#get_user_type").addClass("form-control-danger");
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
                url : "<?= site_url('settings/rank_list')?>",
                    success : function(result){
                        $('#user_type_list').html(result);	
                    },
            });                        
    $('body').on('click','#save_user_type',function(){
                
                
                    var user_type = $('#get_user_type').val();
                    var user_type_id = $('.user_type_id').val(); 
                    
                    if (user_type == null || user_type == " ") {
                        $("#get_user_type").addClass("input-danger");
                    }
					
					
					//------------Adding logs to DB------------
					var request_type = 'update';
					var url = window.location.href;
					data = { 'request_type' : request_type, 'request_url':url, 'user_type' : user_type,'user_type_id' : user_type_id };
					
					$.ajax({
						type: "POST",
						url: "<?php echo site_url('RequestLogs/storeActivitesLogs');?>",
						data: data,
						dataType: 'json',
						success: function(data){
						}
					});	
					//------------Adding logs to DB------------
                    
                    if(user_type_id !=0){
                       var url = "<?= site_url('settings/edit_rank');?>";
                    $.ajax({
                            type : "post",
                            data : { 'user_type' : user_type,'user_type_id' : user_type_id},
                                        async : false,
                                        dataType : "html",
                                        url : url,
                            success : function(result){	
                                       $('#user_type_list').html(result);
                                        $('#get_user_type').val('');
                                        window.location.replace("<?= site_url('settings/rank'); ?>"); 
                                    },
                    });
                    }else{
                    
                    
                    if (user_type == null || user_type == "") {
                        alert("Please Fill Out The Required Field");
                        return false;
                    }else{
                    var url = "<?= site_url('settings/save_rank');?>";
                    $.ajax({
                            type : "post",
                            data : { 'user_type' : user_type},
                                        async : false,
                                        dataType : "html",
                                        url : url,
                            success : function(result){	
                                        $('#user_type_list').html(result);
                                        window.location.replace("<?= site_url('settings/rank'); ?>"); 
                                    },
                    });
                    }
                    
                
                
                }
            });
          
             //edit and delete
            $('body').on('click','.edit_user_type',function(){
                var user_type_id = $(this).data('user_type_id');
                var user_type = $(this).data('user_type');
                $('#get_user_type').val(user_type);
                $('.user_type_id').val(user_type_id);
               
            });            
            $('body').on('click','.delete_user_type',function(){
                var user_type_id = $(this).data('user_type_id');
					
					
					//------------Adding logs to DB------------
					var request_type = 'delete';
					var url = window.location.href;
					data = { 'request_type' : request_type, 'request_url':url, 'user_type_id' : user_type_id };
					
					$.ajax({
						type: "POST",
						url: "<?php echo site_url('RequestLogs/storeActivitesLogs');?>",
						data: data,
						dataType: 'json',
						success: function(data){
						}
					});	
					//------------Adding logs to DB------------
					
					
                    var url = "<?= site_url('settings/rank_delete');?>";
                    $.ajax({
                            type : "post",
                            data : {'user_type_id' : user_type_id},
                                     async : false,
                                     dataType : "html",
                                     url : url,
                            success : function (result) {
                              $('#user_type_list').html(result); 
                              window.location.replace("<?= site_url('settings/rank'); ?>"); 
                            },
                                   
                            });
		});
                });
</script>   