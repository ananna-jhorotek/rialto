
<div class="content-wrapper">
    <section class="content-header">
        <h1>Add User information<a href="<?= site_url('settings/user_list') ?>" class="btn btn-success add-btn pull-right">User List</a></h1>      
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">    
                <div class="box box-info">
                    <div class="box-header">        
                    </div>      
                    <div class="box-body">
                        <form action="<?= site_url('settings/save_user'); ?>"  class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">                   
                            <div class="row">
                                <div class="col-lg-12 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">User's System Information:</h3>
                                        </div>
                                        <div class="panel-body">                   
                                            <div class="form-group">
                                                <div class="col-sm-4 col-md-4 col-lg-4">      
                                                    <label>User's Name : </label>
                                                    <input type="text"name="name"  required="" class="form-control">
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4">      
                                                    <label>Phone Number :</label>
                                                    <input type="number" name="phone" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4" id="userNameDiv">      
                                                    <label>E-Mail :</label>
                                                    <input type="email" placeholder="E-Mail"  required  name="username"  id="email" class="form-control form-control-success" >
                                                    <span style="color: red;" class="text-help" id="userNameErrorMsg"></span>
                                                </div>
                                             </div>  
                                             <div class="form-group">
                                                <div class="col-sm-4 col-md-4 col-lg-4">      
                                                    <label>Password :</label>
                                                    <input type="password" required  name="password" id="password" class="form-control" >
                                                </div>                                   
                                                <div class="col-sm-4 col-md-4 col-lg-4">                                              
                                                    <label>Role:</label>
                                                    <?php $roles = $this->db->get('roles')->result_array(); ?>
                                                    <select required class="form-control" name="role">
                                                        <option value="">Select Role</option>
                                                        <?php foreach ($roles as $role): ?>
                                                            <option  value="<?= $role['roleid'] ?>"><?= $role['role_name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select> 
                                                </div>                                                      
                                                <div class="col-sm-2 col-md-2 col-lg-2">                
                                                       <label> User's Image :</label>                                                  
                                                       <input id="file-5" name="user_image" type="file"  multiple=true>
                                                </div>
                                                 
                                                     <div class="col-sm-2 col-md-2 col-lg-2" style="margin-top: 25px;">      
                                                        <div class="checkbox">
                                                            <label>
                                                                <input value="1" name="is_authorized" type="checkbox"> <span style="font-weight: bold;"> Authorized Officer</span>
                                                            </label>
                                                        </div>
                                                     </div>  
                                                
                                            </div>   
                                                
                                                
                                            </div>                               
                                        </div>
                                    </div>
                                </div> 
                            
                                <div class="row">
                                <div class="col-lg-12 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">User Organization Information:</h3>
                                        </div>
                                        <div class="panel-body">                   
                                            <div class="form-group">
                                                <div class="col-sm-4 col-md-4 col-lg-4">
                                                    <label>Wing :</label>
                                                    <?php $wings = $this->db->get('wings')->result_array(); ?>
                                                    <select required class="form-control" id="wing_id" name="wing">
                                                        <option value="">Select wing</option>
                                                        <?php foreach ($wings as $wing): ?>
                                                            <option  value="<?= $wing['wings_id'] ?>"><?= $wing['wing'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select> 

                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4">
                                                    <label>Department/Battalion :</label>
                                                    <?php $battalions = $this->db->get('battalions')->result_array(); ?>
                                                    <select required class="form-control battalion_id" id="battalion_id" name="battalion">
                                                        
                                                    </select>                                                     
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4">
                                                    <label>Unit :</label>
                                                    <?php $appointments = $this->db->get('appointments')->result_array(); ?>
                                                    <select required class="form-control" id="unit" name="appointment">
                                                       
                                                        
                                                    </select> 
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                    <label>Designation :</label>
                                                    <?php $designations = $this->db->get('designations')->result_array(); ?>
                                                    <select required class="form-control" id="designation" name="designation">
                                                        
                                                    </select> 
                                                    <!--<input type="text" required="" name="designation"  class="form-control">-->
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4">
                                                    <label>Rank :</label>                                                    
                                                    <?php $ranks = $this->db->get('ranks')->result_array(); ?>
                                                    <select required class="form-control" name="rank">
                                                        <option value="">Select Rank</option>
                                                        <?php foreach ($ranks as $rank): ?>
                                                            <option  value="<?= $rank['ranks_id'] ?>"><?= $rank['rank'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select> 

                                                </div> 
                                                <div class="col-sm-4 col-md-4 col-lg-4">
                                                    <label>Reporting Officer :</label>
                                                    <?php $rt_officers = $this->db->get('rt_officers')->result_array(); ?>
                                                    <select required class="form-control" id="rt_officer" name="rt_officer">
                                                        
                                                    </select> 
                                                </div>
                                                
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            
                            </div>
                            
                            
                            
                            

                            <div class="row">

                                <div class="form-group">
                                    <div class="col-sm-5"></div>
                                    <div class="col-sm-4">
                                        <input type="submit" value="Create User" name="submit" id="sub" class="btn btn-primary add-btn">
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>

                                
                            </div>
                        </form>
                    </div>

                </div>  
            </div> 
</div>
 

<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>
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
                    $('#battalion_id').show();
                    $('#battalion_id').html(result);
                },
            });
        });
//      ##################  battalion part #######################
        $('body').on('change', '#battalion_id', function () {
            var battalion_id = $('#battalion_id').val();
            var url = "<?= site_url('settings/bat_wise_unit'); ?>";
            $.ajax({
                type: "post",
                data: {'battalion_id': battalion_id},
                dataType: "html",
                url: url,
                success: function (result) {              
                    $('#unit').show();
                    $('#unit').html(result);
                },
            });
        });
    
//        ##############  Unit Part ######################3
         $('body').on('change', '#unit', function () {
            var unit = $('#unit').val();
            var url = "<?= site_url('settings/unit_wise_desig'); ?>";
            $.ajax({
                type: "post",
                data: {'unit': unit},
                dataType: "html",
                url: url,
                success: function (result) {              
                    $('#designation').show();
                    $('#designation').html(result);
                },
            });
        });
        
//        ############# Reporting officer ############
        $('body').on('change', '.battalion_id', function () {
            var battalion_id = $('.battalion_id').val();
            var url = "<?= site_url('settings/bat_wise_rt_officer'); ?>";
            $.ajax({
                type: "post",
                data: {'battalion_id': battalion_id},
                dataType: "html",
                url: url,
                success: function (result) {              
                    $('#rt_officer').show();
                    $('#rt_officer').html(result);
                },
            });
        });
    
      });
</script>


<script>
    $(document).ready(function () {     
//file upload start
 $("#file-5").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-xs",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
    });
//file upload end
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('body').on('input', '#email', function () {
           var email = $('#email').val();           
            $.ajax({
                async: false,
                url: "<?= site_url('settings/check_existing_email'); ?>",
                type: "POST",
                data: {'email': email},
                success: function (result)
                {                  
                    if (result == 0) {
                        $("#userNameDiv").removeClass("has-warning");
                        $("#email").removeClass("form-control-danger");      
                        $('#userNameErrorMsg').text('');
                    } else {
                            $('#email').val('');
                            $("#userNameDiv").addClass("has-warning");
                            $("#email").addClass("form-control-danger");
                            $("#userNameErrorMsg").text("This Email Is Already Taken. Please Try Something Else.");
                    }

                }
            });
        });
    });
</script>

