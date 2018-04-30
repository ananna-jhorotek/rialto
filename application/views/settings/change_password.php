<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Change Your Password
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboards/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li> 
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              
<!--####################################       start main content     ##########################################-->
              

<div class="col-md-12">    
    <div class="box box-info">
      <div class="box-header">
<!--        <h3 class="box-title">Floor Entry Form</h3>-->
        <div align="right" style="margin-top:">
            <a class="btn btn-primary btn-xs" title="" data-toggle="tooltip" href="" data-original-title="Back">
                <i class="fa fa-reply"></i>
            </a> 
        </div>
      </div>      
        <div class="box-body">  
            <form class="form-horizontal change_pass_form">
                                 <input type="hidden" value="<?=$id;?>" id="userid">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Current Password</label>
                                    <div class="col-sm-5">
                                        <input type="password" name="prev" class="form-control" placeholder="Current Password" required />							
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">New Password</label>
                                <div class="col-sm-5">
                                    <input type="password" name="new" class="form-control" placeholder="New Password" required />							
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Confirm Password</label>
                                <div class="col-sm-5">
                                    <input type="password" name="c_new" class="form-control" placeholder="Confirm New Password" required />							
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"></label>
                                <div class="col-sm-5">
                                    <input type="submit" class="btn btn-danger btn-block" value="Change Password" />							
                                </div>
                            </div>
                              </form>                          
                            
                        </div>
                    </div>
		</div>
            </div>
	</div>
	
	
        <section class="content" id="search_results" style="margin-top: -50px;">
            
        </section>  

<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>    
<script type="text/javascript">
    $(document).ready(function () {
        $('body').on('submit', '.change_pass_form', function (e) {
            e.preventDefault();
            if ($('input[name=new]').val() != $('input[name=c_new]').val())
            {
                alert('New Password and Confirm Password are not matching');
            } else
            {
                $.ajax({
                    url: "<?= site_url('settings/submit_change_password'); ?>",
                    type: 'post',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (data)
                    {
                        if (data != 0)
                        {
                            alert("Password changed successfully");
                        } else
                        {
                            alert("Something went wrong or Current Password doesn't match");
                        }
                    }
                });
            }
        });
    });
</script>