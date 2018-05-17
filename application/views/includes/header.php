<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php $config = $this->db->get('config')->row_array();?>
        <?php
        $user_id = $this->session->userdata('user_id');
        $user_info = $this->db
			->select('name, email, phone,roles.roleid,roles.role_name,users.*,battalions.*,appointments.*,designations.*')
			->join('roles', 'roles.roleid=users.user_type')
                        ->join('battalions', 'battalions.battalions_id=users.battalions_id')
                        ->join('appointments', 'appointments.battalions_id=battalions.battalions_id')
                        ->join('designations', 'designations.designations_id=users.designations_id')
			->where('id', $user_id)
			->get('users')
			->row_array();
	?>
        <title> <?= $config['name_of_system']; ?> </title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="icon" href="<?= base_url('assets/uploads/files/'.$config['fav_icon']);?>" type="image/x-icon">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/_all-skins.min.css');?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/blue.css');?>">         
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datetimepicker.css');?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap.min.css');?>">    
        <link rel="stylesheet" href="<?= base_url('assets/css/jquery.dataTables.min.css');?>">    
       
        <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>">
		
		
		<!--- File Upload--->		
        <link rel="stylesheet" href="<?= base_url('assets/css/fileinput.css');?>">		
		<!--- File Upload--->
		
		<!--- Map--->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCM17SPnOWcBur5ekpJ9rvFumehGZj8gLE" async defer></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script-->
    <script src='https://unpkg.com/leaflet.gridlayer.googlemutant@latest/Leaflet.GoogleMutant.js'></script>
	
        
     </head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <!--<div class="container">-->
        <div class="navbar-header">
		  
		  <p>
			<img src="<?= base_url('assets/images/rab-logo.png'); ?>" height=50 width=50 >
		  </p>
		  
		  
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <?php   $user_role = $this->session->userdata('user_type');
                    $user_name = $this->session->userdata('user_name');
                    $menus = $this->db->join('menus', 'menus.menuid=menu_role.menuid')->where('roleid', $user_role)->where('parent', 0)->order_by('menu_role.priority')->get('menu_role')->result_array();
                    foreach ($menus as $menu):?> 
            
          
                <li class="dropdown">       
                    
                     <?php $sub_menus = $this->db->join('menus', 'menus.menuid=menu_role.menuid')->where('roleid', $user_role)->where('parent', $menu['menuid'])->order_by('menu_role.priority')->get('menu_role')->result_array(); ?>
                       
                    <a style="font-size: 15px; font-weight: bold; text-transform: uppercase;" href="<?= ($menu['menu_url']!='')?site_url($menu['menu_url']):'#' ?>"                                             
                        <?php echo (!empty($sub_menus)) ? 'class="dropdown-toggle"' : '';  ?> <?php echo (!empty($sub_menus)) ? 'data-toggle="dropdown"' : '';  ?>                    
                        class="<?= ($menu['menu_url']!='')?site_url($menu['menu_url']):'#' ?>">                        
                        <span><?= $menu['menu_title'] ?></span><?php echo (!empty($sub_menus)) ? '<span class="caret"></span>' : '';  ?>    
                          
                      </a>                    
                      <?php if (!empty($sub_menus)): ?>  
                          <ul class="dropdown-menu" role="menu">
                              <?php foreach ($sub_menus as $sub_menu): ?> 
                                  <li><a style="font-size: 15px;" href="<?= site_url($sub_menu['menu_url']) ?>"><i class="<?= $sub_menu['icon_class'] ?>"></i> <?= $sub_menu['menu_title'] ?></a></li>
                              <?php endforeach; ?>
                          </ul>
                      <?php endif; ?>
                </li>
             <?php endforeach; ?> 
          </ul>

        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
          
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php $userimage = $user_info['user_image'];
                        if ($userimage != NULL) {?>                  
                      <img src="<?php echo base_url('assets/uploads/images/' . $userimage) ?>" class="user-image" alt="User Image">
                  <?php } else { ?>
                      <img src="<?php echo base_url('assets/uploads/default_user.png') ?>" class="user-image" alt="User Image">
                  <?php } ?>                                    
                  <!--<img src="<?= base_url('assets/images/habib.jpg'); ?>" class="user-image" alt="User Image">-->
                  <span class="hidden-xs"> <?= $user_info['name']; ?></span>                  
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                    <?php $userimage = $user_info['user_image'];
                        if ($userimage != NULL) {?>                  
                      <img src="<?php echo base_url('assets/uploads/images/' . $userimage) ?>" class="img-circle" alt="User Image">
                  <?php } else { ?>
                      <img src="<?php echo base_url('assets/uploads/default_user.png') ?>" class="img-circle" alt="User Image">
                  <?php } ?>
                    
                    <!--<img src="<?= base_url('assets/images/rab-logo.png'); ?>" class="img-circle" alt="User Image">-->
                    <p>
                         <?= $user_info['designation']; ?> - (<?= $user_info['appointment']; ?>) - <?= $user_info['role_name']; ?>
<!--                                            <small>Member since Nov. 2012</small>-->
                    </p>
                </li>
                <!-- Menu Body -->
               
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-success btn-flat">Profile</a>
                  </div>
                    <div class="pull-right">
                        <a href="<?= site_url('auth/logout'); ?>" class="btn btn-danger btn-flat">Sign out</a>
                    </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      <!--</div>-->
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <!--<div class="container">-->

      <!-- Main content -->
      <section class="content">
     

<script type="text/javascript">
setTimeout(onUserInactivity, 1000 * 300)
function onUserInactivity() {
   window.location.href = "<?= site_url('auth/logout'); ?>"
}
</script>



