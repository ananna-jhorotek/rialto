 
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/update_user');?>">
                 <input type="hidden" value="<?= $user_details['id']?>" name="user_id">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">User Basic Information:</h3>
                            </div>
                            <div class="panel-body">                   
                                <div class="form-group">
                                   
                                    <div class="col-sm-4 col-md-4 col-lg-4">      
                                        <label>Name : </label>
                                        <input type="text"name="name" value="<?= $user_details['name']?>" required class="form-control">
                                    </div>
                                   <div class="col-sm-4 col-md-4 col-lg-4">      
                                        <label>Phone Number :</label>
                                        <input type="text" name="phone" class="form-control" value="<?= $user_details['phone']?>" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                        <!--<input type="text" name="phn" id="mobile"  class="form-control" >-->
                                    </div>
                                   <div class="col-sm-4 col-md-4 col-lg-4" id="userNameDiv">      
                                        <label>E-Mail :</label>
                                        <input type="email" value="<?= $user_details['email']?>" name="username" id="email" class="form-control form-control-success" >
                                        <span style="color: red;" class="text-help" id="userNameErrorMsg"></span>
                                   </div> 
                                </div>  
                                <div class="form-group">
                                    <div class="col-sm-4 col-md-4 col-lg-4">                                              
                                        <label>Role</label>
                                        <?php $roles = $this->db->get('roles')->result_array(); ?>
                                        <select class="form-control" name="role">

                                            <?php foreach ($roles as $role): ?>
                                                <option value="<?= $role['roleid'] ?>" <?= ($role['roleid'] != $user_details['roleid']) ? '' : 'selected' ?>><?= $role['role_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-4 col-md-4 col-lg-4">       
                                        <h6>Profile Picture:</h6>
                                        <div class="formrow">                                           
                                                
                                             <?php $userimage = $user_details['user_image'];
                                                if ($userimage != NULL) {
                                                    ?>                  
                                                    <img src="<?php echo base_url('assets/uploads/images/' . $userimage) ?>" height="80px" width="100px" alt="Profile Image">
                                                <?php } else { ?>
                                                    <img src="<?php echo base_url('assets/uploads/default_user.png') ?>" height="80px" width="100px" alt="Profile Image">
                                                <?php } ?>    
                                                
                                                
                                            <input type="file" name="user_pic" class="file-3" />
                                            <input type="hidden" name="old_file" value="<?= $user_details['user_image']; ?>"/>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4 col-md-4 col-lg-4" style="margin-top: 25px;">      
                                        <div class="checkbox">
                                            <label>
                                                <input value="<?= $user_details['is_authorized'];?>" <?= ($user_details['is_authorized'] != '1') ? '' : 'checked'?> ng-checked="all" name="is_authorized" type="checkbox"> <span style="font-weight: bold;"> Authorized Officer</span>
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
                                        <select class="form-control" name="wing" id="wing_id">                                          
                                             <?php foreach($wings as $wing):?>
                                                     <option value="<?= $wing['wings_id'] ?>" <?= ($wing['wings_id'] != $user_details['wings_id']) ? '' : 'selected'?>><?= $wing['wing'] ?></option>
                                             <?php endforeach;?>
                                        </select>                                     
                                    </div>                                    
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <label>Battalion :</label>
                                        <?php $battalions = $this->db->get('battalions')->result_array(); ?>
                                        <select class="form-control bat_pre_data" name="battalion"  id="battalion_id">
                                             <?php foreach($battalions as $battalion):?>
                                                     <option value="<?= $battalion['battalions_id'] ?>" <?= ($battalion['battalions_id'] != $user_details['battalions_id']) ? '' : 'selected'?>><?= $battalion['battalion'] ?></option>
                                             <?php endforeach;?>
                                        </select>                                        
                                        <select class="form-control"  id="battalion_id" style="display: none;">

                                        </select> 
                                     </div>                                    
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <label>Unit :</label>
                                        <?php $appointments = $this->db->get('appointments')->result_array(); ?>
                                        <select class="form-control unit_predata" name="appointment" id="unit_id">
                                             <?php foreach($appointments as $appointment):?>
                                                     <option value="<?= $appointment['appointments_id'] ?>" <?= ($appointment['appointments_id'] != $user_details['appointments_id']) ? '' : 'selected'?>><?= $appointment['appointment'] ?></option>
                                             <?php endforeach;?>
                                        </select>
                                        <select class="form-control"  id="unit_id" style="display: none;">

                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <label>Designation :</label>
                                    <?php $designations = $this->db->get('designations')->result_array(); ?>
                                        <select class="form-control desig_predata" name="designation">                                           
                                             <?php foreach($designations as $designation):?>
                                                     <option value="<?= $designation['designations_id'] ?>" <?= ($designation['designations_id'] != $user_details['designations_id']) ? '' : 'selected'?>><?= $designation['designation'] ?></option>
                                             <?php endforeach;?>
                                        </select> 
                                        
                                        <select class="form-control"  id="designation_id" style="display: none;">

                                        </select>
                                        
                                    </div>                                    
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <label>Rank :</label>
                                         <?php $ranks = $this->db->get('ranks')->result_array(); ?>
                                        <select class="form-control" name="rank">
                                             <?php foreach($ranks as $rank):?>
                                                     <option value="<?= $rank['ranks_id'] ?>" <?= ($rank['ranks_id'] != $user_details['ranks_id']) ? '' : 'selected'?>><?= $rank['rank'] ?></option>
                                             <?php endforeach;?>
                                        </select> 
                                    </div>                                    
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <label>RT Officer :</label>
                                        <?php $rt_officers = $this->db->get('rt_officers')->result_array(); ?>
                                        <select class="form-control pre_rt_officer" name="rt_officer">                                            
                                             <?php foreach($rt_officers as $rt_officer):?>
                                                     <option value="<?= $rt_officer['rt_officers_id'] ?>" <?= ($rt_officer['rt_officers_id'] != $user_details['rt_officers_id']) ? '' : 'selected'?>><?= $rt_officer['rt_officer'] ?></option>
                                             <?php endforeach;?>
                                        </select>
                                        
                                        <select class="form-control"  id="rt_officer_id" style="display: none;">

                                        </select>
                                        
                                    </div>                                         
                                </div>
                                <div class="form-group">                                    
                                    <div class="col-sm-3 col-md-3 col-lg-3">                                              
                                        <label>User Status:</label>                                       
                                        <select class="form-control" name="status">                                                                                   
                                            <option value="1" <?php if($user_details['active'] == '1') echo 'selected="selected"'; ?>>Active</option>
                                            <option value="0" <?php if($user_details['active'] == '0') echo 'selected="selected"'; ?>>Suspend</option>
                                        </select> 
                                    </div>                                         
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-5"></div>
                                  <div class="col-sm-4">
                                      <input type="submit" value="Update User" name="submit" id="sub" class="btn btn-primary add-btn">
                                  </div>
                                  <div class="col-sm-3"></div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>  
                </div>
                
                
                
                
                  </form>
<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>   

<script src="<?php echo base_url('assets/js/fileinput.js');?>" type="text/javascript">
<script>
function goBack() {
    window.history.back();
}
</script>
<script>
    //file upload start
 $(".file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-xs",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
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





<!--<script type="text/javascript">
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
                        
                                    $('body').on('input', '#email', function () {
                                    var email = $('#email').val(); 
                                    
                                     $.ajax({
                                         async: false,
                                         url: "<?= site_url('settings/check_same_email'); ?>",
                                         type: "POST",
                                         data: {'email': email},
                                         success: function (result)
                                         {                  
                                             if (result == 2) {
                                                 alert('same mail')
                                                $("#userNameDiv").addClass("has-warning");
                                                $("#email").addClass("form-control-danger");
                                                $("#userNameErrorMsg").text("This Email Is Already Taken. Please Try Something Else.");
                                             } else {
                                                alert('others mail')
                                                $('#email').val('');
                                                $("#userNameDiv").addClass("has-warning");
                                                $("#email").addClass("form-control-danger");
                                                $("#userNameErrorMsg").text("This Email Is Already Taken. Please Try Something Else.");
                                             }

                                         }
                                     });
                                 });    
                            
                            
                            
                            
                            
                            
                            
//                            
//                            $('#email').val('');
//                            $("#userNameDiv").addClass("has-warning");
//                            $("#email").addClass("form-control-danger");
//                            $("#userNameErrorMsg").text("This Email Is Already Taken. Please Try Something Else.");
                    }

                }
            });
        });
    });
</script>-->