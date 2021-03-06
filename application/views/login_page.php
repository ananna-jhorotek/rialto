 <?php

if($this->session->flashdata('success_msg')){
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg');?>
    </div>
    <?php
}
?>
<?php
if($this->session->flashdata('error_msg')){
    ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_msg');?>
    </div>
    <?php
}
?>

<!DOCTYPE html>
<html>
  <head>
    <?php $config = $this->db->get('config')->row_array();?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $config['name_of_system'];?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
          <link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.min.css');?>">
    <!-- iCheck -->
        <link rel="stylesheet" href="<?= base_url('assets/css/blue.css');?>">


  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-box-body">
        <p class="login-box-msg"><img src="<?= base_url('assets/images/rab-logo.png'); ?>" height=128 width=128 ></p>
        <p class="login-box-msg">IMMC Monitoring and Management System</p>
       <form action="<?= site_url('auth/sign_in'); ?>" method="post">
		  <div id="error">
			<!-- error will be shown here ! -->
		  </div>
		  <div class="form-group has-feedback">
            <input type="email" name="username" value="" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			<span id="check-e"><?php echo form_error('username',"<p class='text-danger'>","</p>")?></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" value="" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span id="check-e"><?php echo form_error('password',"<p class='text-danger'>","</p>")?></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
<!--              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>-->
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
            <div class="col-xs-4"></div>
          </div>
        </form>


       

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
  <script src="<?= base_url('assets/js/jQuery-2.1.4.min.js');?>"></script>
    <!-- Bootstrap 3.3.5 -->
  <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
    <!-- iCheck -->
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>











